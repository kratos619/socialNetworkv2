<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($username)
    {
        $username = User::where('username', $username)->first();

        return view('profile.profile')->with('user', $username);
    }
}
