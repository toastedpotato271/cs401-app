<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::all();   //will get all for the meantime
        $recentPosts = Post::all();
        return view('welcome', ['featuredPosts' => $featuredPosts, 'recentPosts' => $recentPosts]);
    }
}
