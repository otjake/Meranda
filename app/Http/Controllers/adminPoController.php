<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminPoController extends Controller
{
    public function index()
    {
        return view('admin.Post.home');
    }
}
