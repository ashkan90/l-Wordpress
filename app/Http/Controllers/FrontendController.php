<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Profile;
use App\Setting;
use App\Tag;
use App\User;
use Auth;
use App\Widget;
use App\Appearance;
use App\Comment;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        $latest = Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->get();
        $specific = [
            'first' => Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->take(1)->first(),
            'second' => Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->skip(1)->take(1)->first(),
            'third' => Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->skip(2)->take(1)->first(),
            'fourth' => Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->skip(3)->take(1)->first(),
            'fifth' => Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->skip(4)->take(1)->first()
        ];
        $main_catalog = Category::take(4)->get();
        $sub_catalog = Category::skip(4)->take(5)->get();

        $catalog_posts = [
            'large' => Post::where('post_type', 'post')->where('post_status', 'publish')->inRandomOrder()->first(),
            'small' => [
                Post::where('post_type', 'post')->where('post_status', 'publish')->limit(3)->offset(3)->get()
            ],
            'default' => [
                Post::where('post_type', 'post')->where('post_status', 'publish')->orderBy('created_at', 'desc')->take(3)->get()
            ]
        ];

        $all_category = Category::all();

        //dd($catalog_posts['large']->categories());

        if (Post::count() > 0) {
            $posts = Post::where('post_type', 'post')->paginate(15);
        } else if (Auth::check()) {
            $posts = "";
            return redirect()->route('create.post');
        }else
            return "error page";


        $app = Appearance::find(1)->first();


        $top_stories = Post::where('post_type', 'post')
                            ->orderBy('visit_count', 'desc')
                            ->orderBy('comment_count', 'desc');

        //dd($specific);
        if ($app->theme->name == 'avision' or $app->theme->name == 'Avision') {
            return view('front-end.avision.index')
                                ->with('settings', $settings)
                                ->with('latest', $latest)
                                ->with('posts', $posts)
                                ->with('latest_posts', Post::orderBy('created_at', 'desc')->skip(1)->take(10)->get())
                                ->with('assigned', $specific)
                                ->with('catalogs', $main_catalog)
                                ->with('sub_catalog', $sub_catalog)
                                ->with('first_catalog', $catalog_posts)
                                ->with('popular_categories', $all_category->take(6))
                                ->with('top_stories', $top_stories)
                                ->with('menu', Category::all()->take(5))
                                ->with('app', $app)
                                ->with('categories', $all_category);
        }else if ($app->theme->name == 'bona' or $app->theme->name == 'Bona') {
            return view('front-end.bona.index')
                                ->with('settings', $settings)
                                ->with('latest', $latest)
                                ->with('posts', $posts)
                                ->with('latest_posts', Post::orderBy('created_at', 'desc')->skip(1)->take(10)->get())
                                ->with('assigned', $specific)
                                ->with('catalogs', $main_catalog)
                                ->with('sub_catalog', $sub_catalog)
                                ->with('first_catalog', $catalog_posts)
                                ->with('popular_categories', $all_category->take(6))
                                ->with('top_stories', $top_stories)
                                ->with('menu', Category::all()->take(5))
                                ->with('app', $app)
                                ->with('categories', $all_category);
        }

    }

    public function _page($post)
    {
        $post = Post::where('slug', $post)->first();
        $post->visit_count += 1;
        $post->save();

        return view('front-end.avision.page')
                    ->with('settings', Setting::first())
                    ->with('post', $post);
    }

    public function single($category, $slug)
    {
        $settings = Setting::first();
        $post = Post::where('slug', $slug)->first();
        $categories = Post::find($post->id)->categories()->get();
        $tags = Post::find($post->id)->tags()->get();
        $latest = Post::orderBy('created_at', 'desc')->get();

        $post->visit_count += 1;
        $post->save();

        if (Setting::first()->post_page == 'type_1' or Setting::first()->post_page == 'default') {
            return view('front-end.avision.single_type_1')
                        ->with('post', $post)
                        ->with('categories', $categories)
                        ->with('tags', $tags)
                        ->with('latest', $latest)
                        ->with('menu', Category::all()->take(5))
                        ->with('settings', $settings);
        }elseif (Setting::first()->post_page == 'type_2') {
            return view('front-end.avision.single_type_2')
                        ->with('post', $post)
                        ->with('categories', $categories)
                        ->with('tags', $tags)
                        ->with('latest', $latest)
                        ->with('menu', Category::all()->take(5))
                        ->with('settings', $settings);
        }else
            return "error page";
    }

    public function category($category)
    {
        $main_catalog = Category::take(4)->get();
        $sub_catalog = Category::skip(4)->take(5)->get();
        $settings = Setting::first();
        $posts = Category::all()
                        ->where('post_type', 'post')
                        ->where('slug', $category);
        return view('front-end.avision.category')
                    ->with('menu', Category::all()->take(5))
                    ->with('settings', $settings)
                    ->with('catalogs', $main_catalog)
                    ->with('sub_catalog', $sub_catalog)
                    ->with('category', $posts->first())
                    ->with('posts', $posts);
    }

    public function tag($tag)
    {
        $main_catalog = Category::take(4)->get();
        $sub_catalog = Category::skip(4)->take(5)->get();
        $settings = Setting::first();
        $posts = Tag::all()->where('slug', $tag);
        return view('front-end.avision.tag')
                    ->with('menu', Category::all()->take(5))
                    ->with('settings', $settings)
                    ->with('catalogs', $main_catalog)
                    ->with('sub_catalog', $sub_catalog)
                    ->with('tag', $posts->first())
                    ->with('posts', $posts);
    }

    public function comment_store(Request $request, $category, $slug, $post_id)
    {

        //dd($request->all());
        $post = Post::find($post_id);
        $category = $post->categories()->first()->slug;
        $slug = $post->slug;

        $this->validate($request, [
            'author' => 'required',
            'author_email' => 'required',
            'content' => 'required',
        ]);

        Comment::create([
            'post_id' => $post->id,
            'author' => $request->author,
            'author_email' => $request->author_email,
            'author_ip' => \Request::ip(),
            'content' => $request->content,
            'user_id' => ((Auth::check()) ? Auth::user()->id : 0),
            'approved' => ((Auth::check()) ? 1 : 0)
        ]);

        $post->comment_count += 1;
        $post->save();

        

        return redirect()->route('single', ['category' => $category, 'slug' => $slug]);
    }
}
