@extends('layouts.master')

@section('title', 'Home')

@section('content')
@include('components.featured-post', ['featuredPosts' => $featuredPosts])
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
    <div class="md:col-span-2">
        @include('components.recent-posts')
    </div>
    <div>
        @include('components.most-popular')
        @include('components.categories')
    </div>
</div>
@endsection