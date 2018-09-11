<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Tag;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index')->with('settings', Setting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_policy()
    {
        return view('admin.post.page')->with('categories', Category::all())
                                        ->with('tags', Tag::all())
                                        ->with('title', 'Privacy Policy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        Setting::create([
            'site_title' => $request->title,
            'site_slogan' => $request->slogan,
            'site_email' => $request->email,
            'site_language' => $request->lang,
            'home_page' => $request->home_page,
            'post_page' => $request->postpage,
            'privacy_page' => 'privacy_post_link'
        ]);
        
        return redirect()->route('settings');
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
        //
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

        if($request->button == "Save"){
            //dd($request->all());
            $this->validate($request, [
                'site_title' => 'required',
                'site_slogan' => 'required',
                'site_email' => 'required',
                'site_language' => 'required'
            ]);

            dd($request->all());
            $settings = Setting::find($id);
            $settings->site_title = $request->title;
            $settings->site_slogan = $request->slogan;
            $settings->site_email = $request->email;
            $settings->site_language = $request->lang;
            if ($request->homepage and $request->postpage) {
                $settings->home_page = $request->homepage;
                $settings->post_page = $request->post_page;
            } else {
                $settings->home_page = 'default';
                $settings->post_page = 'default';
            }

            $settings->save();

            return redirect()->route('settings');
        }
        else 
        {
            return redirect()->route('create.set');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
