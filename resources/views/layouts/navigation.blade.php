@extends('layouts.app')

@section('nav')
<!-- Header -->
<header class="bg-gradient-to-r from-theme-red via-theme-blue to-theme-yellow shadow-lg py-4">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <!-- Blog Title/Logo -->
        <a href="/"
            class="text-white text-3xl font-bold tracking-tight mb-4 md:mb-0 rounded-lg p-2 hover:bg-white hover:bg-opacity-20 transition-all duration-300">
            Gaming <span class="text-theme-yellow">Blog</span>
        </a>

        <!-- Navigation -->
        <nav class="flex flex-wrap justify-center md:justify-end items-center space-x-4 md:space-x-6 text-lg">
            <a href="/"
                class="text-white hover:text-gray-200 font-medium px-3 py-2 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300">Home</a>
            <a href="/categories"
                class="text-white hover:text-gray-200 font-medium px-3 py-2 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300">Categories</a>
            <a href="/about"
                class="text-white hover:text-gray-200 font-medium px-3 py-2 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300">About</a>
            <a href="/contact"
                class="text-white hover:text-gray-200 font-medium px-3 py-2 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300">Contact</a>

            <!-- Conditional Navigation for User -->
            @auth {{-- This is a Blade directive to check if a user is logged in --}}
            <span class="text-white font-semibold px-3 py-2 rounded-lg bg-white bg-opacity-10">
                Welcome, {{ Auth::user()->name ?? 'Gamer' }}! {{-- Display username --}}
            </span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf {{-- CSRF token for security --}}
                <button type="submit"
                    class="bg-white text-theme-blue px-4 py-2 rounded-full font-semibold shadow-md hover:bg-gray-100 transition-all duration-300">Logout</button>
            </form>
            @else
            <a href="/login"
                class="bg-white text-theme-blue px-4 py-2 rounded-full font-semibold shadow-md hover:bg-gray-100 transition-all duration-300">Login</a>
            <a href="/register"
                class="bg-theme-yellow text-gray-800 px-4 py-2 rounded-full font-semibold shadow-md hover:bg-yellow-300 transition-all duration-300">Register</a>
            @endauth
        </nav>
    </div>
</header>
@endsection