@extends('layouts.app')

@section('content-recent')
<!-- Recent Posts Section (Example) -->
<section class="mb-12">
    <h2 class="text-4xl font-extrabold text-center mb-8 text-gray-900">Recent Posts</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        {{-- Loop through recent posts --}}
        @forelse ($recentPosts as $post)
        <div
            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
            <img src="{{ $post->image_url ?? 'https://placehold.co/400x250/ef4444/ffffff?text=Recent+Post' }}"
                alt="{{ $post->title ?? 'Recent Post Image' }}" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $post->title ?? 'Top 5 RPGs to Play Right Now'
                    }}</h3>
                <p class="text-gray-700 text-sm mb-4">{{ $post->date ?? 'July 3, 2025' }} by <span
                        class="text-theme-blue font-semibold">{{ $post->author ?? 'Gaming Guru' }}</span></p>
                <p class="text-gray-600 leading-relaxed mb-4">{{ $post->excerpt ?? 'Discover the most immersive and
                    engaging role-playing games that are dominating the gaming world this year. From fantasy epics
                    to sci-fi adventures...' }}</p>
                <a href="{{ $post->url ?? '#' }}"
                    class="inline-block text-theme-red hover:text-red-700 font-semibold">Read More &rarr;</a>
            </div>
        </div>
        @empty
        {{-- Default recent posts if none are passed from backend --}}
        <div
            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
            <img src="https://placehold.co/400x250/ef4444/ffffff?text=Recent+Post+1" alt="Recent Post 1"
                class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Top 5 RPGs to Play Right Now</h3>
                <p class="text-gray-700 text-sm mb-4">July 3, 2025 by <span class="text-theme-blue font-semibold">Gaming
                        Guru</span></p>
                <p class="text-gray-600 leading-relaxed mb-4">Discover the most immersive and engaging role-playing
                    games that are dominating the gaming world this year. From fantasy epics to sci-fi adventures...
                </p>
                <a href="#" class="inline-block text-theme-red hover:text-red-700 font-semibold">Read More
                    &rarr;</a>
            </div>
        </div>
        <div
            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
            <img src="https://placehold.co/400x250/3b82f6/ffffff?text=Recent+Post+2" alt="Recent Post 2"
                class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Exploring the World of Indie Games</h3>
                <p class="text-gray-700 text-sm mb-4">June 28, 2025 by <span class="text-theme-blue font-semibold">Indie
                        Explorer</span></p>
                <p class="text-gray-600 leading-relaxed mb-4">Uncover hidden gems and unique experiences in the
                    ever-growing world of independent video games. Small studios, big ideas!</p>
                <a href="#" class="inline-block text-theme-red hover:text-red-700 font-semibold">Read More
                    &rarr;</a>
            </div>
        </div>
        <div
            class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
            <img src="https://placehold.co/400x250/facc15/333333?text=Recent+Post+3" alt="Recent Post 3"
                class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Gaming Peripherals: What You Need</h3>
                <p class="text-gray-700 text-sm mb-4">June 20, 2025 by <span class="text-theme-blue font-semibold">Tech
                        Reviewer</span></p>
                <p class="text-gray-600 leading-relaxed mb-4">From mechanical keyboards to high-refresh-rate
                    monitors, we break down the essential gear every serious gamer should consider.</p>
                <a href="#" class="inline-block text-theme-red hover:text-red-700 font-semibold">Read More
                    &rarr;</a>
            </div>
        </div>
        @endforelse
    </div>
</section>
@endsection