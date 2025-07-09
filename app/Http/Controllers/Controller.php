<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Don't forget to import Auth if using it directly

abstract class Controller
{
    public function index()
    {
        // Test if auth user
        if (Auth::check()) {
            return redirect()->route('/dashboard');
        }
        // Example data (you would fetch this from your database)
        $featuredPosts = [
            [
                'title' => 'The Next-Gen Console Showdown',
                'excerpt' => 'A deep dive into the features, performance, and exclusive titles of the latest gaming consoles.',
                'image_url' => 'https://placehold.co/600x400/ef4444/ffffff?text=Console+Showdown',
                'url' => '/posts/next-gen-console-showdown'
            ],
            [
                'title' => 'Top 10 PC Games of 2025',
                'excerpt' => 'Our picks for the best PC games released or updated this year, from AAA blockbusters to indie darlings.',
                'image_url' => 'https://placehold.co/600x400/facc15/333333?text=Top+PC+Games',
                'url' => '/posts/top-10-pc-games-2025'
            ],
            // ... more featured posts
        ];

        $recentPosts = [
            [
                'title' => 'Esports: The Rise of Competitive Gaming',
                'excerpt' => 'An analysis of how esports has grown into a global phenomenon and what the future holds.',
                'image_url' => 'https://placehold.co/400x250/3b82f6/ffffff?text=Esports',
                'date' => 'July 1, 2025',
                'author' => 'Esports Analyst',
                'url' => '/posts/esports-rise'
            ],
            [
                'title' => 'Understanding Gaming Genres',
                'excerpt' => 'A comprehensive guide to different gaming genres and how to find your next favorite game.',
                'image_url' => 'https://placehold.co/400x250/ef4444/ffffff?text=Genres',
                'date' => 'June 25, 2025',
                'author' => 'Genre Guide',
                'url' => '/posts/gaming-genres'
            ],
            // ... more recent posts
        ];

        return view('welcome', compact('featuredPosts', 'recentPosts'));
    }
}
