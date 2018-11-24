<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfilesController extends Controller
{
    public function index($username)
    {
        $username = User::where('username', $username)->first();

        return view('profile.profile')->with('user', $username);
    }

    public function edit()
    {
        return view('profile.edit')->with('info', Auth::user()->profile);
    }

    public function update(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'location' => 'required|max:255',
            'about' => 'required'
        ]);

        Auth::user()->profile()->update([
            'location' => $request->location,
            'about' => $request->about
        ]);

        Session::flash('success', 'Profile Updated');
        return redirect()->back();
    }
}
