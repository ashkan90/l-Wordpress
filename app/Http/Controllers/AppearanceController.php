<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appearance;

class AppearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app = Appearance::find(1)->first();
        return view('admin.appearance.index')->with('app', $app);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        /*$id = 1;
        $app = Appearance::find($id)->first();

        if ($request->hasFile('icon"')) {
            $icon = $request->icon;

            $icon_new_name = time() . $icon->getClientOriginalName();
            $icon->move('assets/upload/site', $icon_new_name);

            $app->icon = 'assets/upload/site/' . $icon_new_name;
        }

        $app->api_key = $request->api;
        $app->footer = $request->footer;
        $app->description = $request->description;
        $app->keywords = $request->keywords;
        $app->save();*/

        return redirect()->route('appearance');
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
