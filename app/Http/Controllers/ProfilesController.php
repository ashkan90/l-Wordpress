<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.admin.index')
                                        ->with('profiles', Profile::all())
                                        ->with('users', User::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'first_name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::create([
            'name' => $request->first_name,
            'surname' => $request->last_name,
            'password' => bcrpyt($request->password),
            'email' => $request->email,
            'contact_site' => $request->contact_site
        ]);

        $profile = Profile::create([
            'avatar' => $request->avatar,
            'about' => $request->about,
            'hobbies' => $request->hobbies,
            'user_id' => $user->id
        ]);

        return redirect()->route('users');
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
        return view('admin.user.admin.edit')->with('user', User::find($id));
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
        dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'firstname' => 'required'
        ]);

        $user = User::find($id)->first();
        $profile = Profile::where('user_id', $user->id)->get();


        $user->name = $request->name;
        $user->password = bcrpyt($request->password);
        $user->firstname = $request->firstname;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->contact_site = $request->site;
        $profile->about = $request->about;
        $profile->hobbies = $request->hobby;


        $user->save();
        $profile->save();

        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->get();
        $user_profile = Profile::where('user_id', $user->id)->delete();
        $user->delete();

        return redirect()->route('users');
    }
}
