@extends('layouts.app')

@section('content-featured')
<section class="mb-12">
    <h2 class="text-4xl font-extrabold text-center mb-8 text-gray-900">Featured Posts</h2>
    <div id="featured-carousel" class="carousel-container relative w-full max-w-4xl mx-auto bg-white shadow-xl">
        <div class="carousel-track flex">
            {{-- Loop through featured posts --}}
            @forelse ($featuredPosts as $post)
            <div
                class="carousel-item p-6 flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="md:w-1/2">
                    <img src="{{ $post->image_url ?? 'https://placehold.co/600x400/3b82f6/ffffff?text=Featured+Image' }}"
                        alt="{{ $post->title ?? 'Featured Post Image' }}"
                        class="w-full h-auto object-cover rounded-lg shadow-md mb-4 md:mb-0">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 mb-3">{{ $post->title ?? 'Exciting New Game
                        Release!' }}</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">{{ $post->excerpt ?? 'Dive into the latest gaming
                        sensation with our in-depth review. Explore new mechanics, stunning graphics, and an
                        immersive storyline that will keep you hooked for hours.' }}</p>
                    <a href="{{ $post->url ?? '#' }}"
                        class="inline-block bg-theme-red text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-red-600 transition-all duration-300">Read
                        More</a>
                </div>
            </div>
            @empty
            {{-- Default items if no featured posts are passed from backend --}}
            <div
                class="carousel-item p-6 flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Featured+Game+1" alt="Featured Game 1"
                        class="w-full h-auto object-cover rounded-lg shadow-md mb-4 md:mb-0">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 mb-3">The Legend of Eldoria: A New Era</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Embark on an epic journey in Eldoria, where
                        ancient magic meets modern warfare. Discover hidden secrets and forge your destiny in this
                        breathtaking open-world RPG.</p>
                    <a href="#"
                        class="inline-block bg-theme-red text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-red-600 transition-all duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="carousel-item p-6 flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/facc15/333333?text=Featured+Game+2" alt="Featured Game 2"
                        class="w-full h-auto object-cover rounded-lg shadow-md mb-4 md:mb-0">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 mb-3">Cyberpunk City: Neon Shadows</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Navigate the treacherous streets of Cyberpunk
                        City. A thrilling action-adventure game with stunning neon graphics and a gripping detective
                        story.</p>
                    <a href="#"
                        class="inline-block bg-theme-red text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-red-600 transition-all duration-300">Read
                        More</a>
                </div>
            </div>
            <div
                class="carousel-item p-6 flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8">
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/ef4444/ffffff?text=Featured+Game+3" alt="Featured Game 3"
                        class="w-full h-auto object-cover rounded-lg shadow-md mb-4 md:mb-0">
                </div>
                <div class="md:w-1/2 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 mb-3">Galactic Conquest: Starfall</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Command your fleet and conquer the galaxy in this
                        real-time strategy masterpiece. Build your empire, research new tech, and crush your
                        enemies!</p>
                    <a href="#"
                        class="inline-block bg-theme-red text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-red-600 transition-all duration-300">Read
                        More</a>
                </div>
            </div>
            @endforelse
        </div>
        <button class="carousel-button prev" aria-label="Previous Slide">&lt;</button>
        <button class="carousel-button next" aria-label="Next Slide">&gt;</button>
    </div>
</section>
@endsection