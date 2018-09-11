<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Auth;
use Datatables;
use App\Setting;
use Validator;

class PostsController extends Controller
{


    public function store_page(Request $request)
    {

        dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $featured = $request->file;
        $featured_new_name = time() . $featured->getClientOriginalName();
        $featured->move('assets/upload/post', $featured_new_name);

        Post::create([
          'title' => $request->title,
          'slug' => str_slug($request->title),
          'post_status' => (($request->submit == "Publish") ? 'publish' : 'draft'),
          'comment_status' => 'closed',
          'content' => $request->content,
          'post_link' => URL::to('/') . str_slug($request->title),
          'user_id' => -1,
          'post_type' => 'page',
          'featured' => 'assets/upload/post/' . $featured_new_name
        ]);

        return redirect()->route('posts');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index')
                                        ->with('posts', Post::all())
                                        ->with('trashed_posts', Post::onlyTrashed()->get());
    }
    public function get_datatable(){
      return Datatables::eloquent(Post::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create')->with('categories', Category::all())
                                        ->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        //Featured image can be empty. Because user haven't to add featured image.

        $featured = $request->file;
        $featured_new_name = time() . $featured->getClientOriginalName();
        $featured->move('assets/upload/post', $featured_new_name);

        $first_category = Category::find($request->category[0]);
        $post_link = route('single', ['category' => $first_category->slug, 'slug' => str_slug($request->title) ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'featured' => 'assets/upload/post/' . $featured_new_name,
            'slug' => str_slug($request->title),
            'post_status' => (($request->submit == "Publish") ? 'publish' : 'draft'),
            'comment_status' => 'open',
            'post_link' => $post_link,
            'post_type' => 'post'
            //'keywords' => $request->keywords
        ]);
        //dd($request->all());
        

        if ($request->category) {
            for ($i=0; $i < count($request->category); $i++) { 
                $post->categories()->attach($request->category[$i]);
            }
        }else
        {
            $uncategorized = Category::where('name', 'uncategorized')->first();
            $post->categories()->attach($uncategorized->id);
        }

        if ($request->tags) {
            // daha sonra sağ sol boşluklar için trim ile işlem yaptır.
            
            $tags = explode(",", $request->tags);
            $t_tags = array_map('trim', $tags);
            for ($i=0; $i < count($tags); $i++) { 
                Tag::create([
                    'name' => $t_tags[$i],
                    'slug' => str_slug($t_tags[$i])
                ]);
                $new_tag = Tag::where('name', $t_tags[$i])->first();
                $post->tags()->attach($new_tag->id);
            }
        }

        $settings = Setting::first();
        $settings->post_page = $request->type;
        $settings->save();


        return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit')->with('post', Post::where('id', $id)->first())
                                      ->with('categories', Category::all())
                                      ->with('tags', Tag::all())
                                      ->with('settings', Setting::first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required|max:128',
            'content' => 'required',
            'category' => 'required'
        ]);

        $post = Post::find($id);

        if ($request->hasFile('featured"')) {
            $featured = $request->featured;

            $featured_new_name = time() . $featured->getClientOriginalName();
            $featured->move('assets/upload/post', $featured_new_name);

            $post->featured = 'assets/upload/post/' . $featured_new_name;
        }

        $post->content = $request->content;
        $post->title = $request->title;
        //dd($request->all());
        
        if ($request->tags) {
            // daha sonra sağ sol boşluklar için trim ile işlem yaptır.
            $tags = explode(",", $request->tags);
            for ($i=0; $i < count($tags); $i++) { 
                Tag::create([
                    'name' => $tags[$i],
                    'slug' => str_slug($tags[$i])
                ]);
                $new_tag = Tag::where('name', $tags[$i])->first();
                $post->tags()->sync($new_tag->id);
            }
        }
        //$post->keywords = $request->keywords;

        $post->save();
        if ($request->category) {
            $post->categories()->sync($request->category);
        }else {
            $uncategorized = Category::where('name', 'uncategorized')->first();
            $post->categories()->sync($uncategorized->id);
        }

        $settings = Setting::first();
        $settings->post_page = $request->type;
        $settings->save();
        

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts');
    }

    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();

        return redirect()->route('posts');
    }

    public function kill($id)
    {
        Post::withTrashed()->where('id', $id)->forceDelete();
        //post tag -> delete;

        return redirect()->route('posts');
    }
}
