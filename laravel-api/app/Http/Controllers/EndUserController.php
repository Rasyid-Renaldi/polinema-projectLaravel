<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndUserController extends Controller
{
    public function forumUser()
    {
        return view('layouts.forum');
    }
}
