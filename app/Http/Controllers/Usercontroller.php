<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function userName($user = 'yash')
    {
        return view('about', ['name' => $user]);
    }
}