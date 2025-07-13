<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::where('featured_post', 1)
            ->orderBy('publication_date', 'desc')
            ->get();

        $recentPosts = Post::where('publication_date', '!=', null)
            ->orderBy('publication_date', 'desc')
            ->get();

        $mostPopular = Post::where('publication_date', '!=', null)
            ->orderBy('views_count', 'desc')
            ->take(10)  // top 10
            ->get();

        $categories = Category::all();


        return view(
            'welcome',
            [
                'featuredPosts' => $featuredPosts,
                'recentPosts' => $recentPosts,
                'mostPopular' => $mostPopular,
                'categories' => $categories
            ]
        );
    }
}
