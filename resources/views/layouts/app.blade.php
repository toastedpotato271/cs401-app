<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="antialiased text-gray-800 min-h-screen">

    @yield('nav')
    <main class="container mx-auto px-4 py-8">
        @yield('content-featured')
        @yield('content-recent')
    </main>
    @yield('footer')

    <script>
        // JavaScript for the Featured Posts Carousel
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.getElementById('featured-carousel');
            if (!carousel) return; // Exit if carousel element not found

            const track = carousel.querySelector('.carousel-track');
            const items = Array.from(track.children);
            const prevButton = carousel.querySelector('.carousel-button.prev');
            const nextButton = carousel.querySelector('.carousel-button.next');
            const itemWidth = items[0] ? items[0].getBoundingClientRect().width : 0; // Get width of a single item
            let currentIndex = 0;

            // Function to update carousel position
            const updateCarousel = () => {
                const offset = -currentIndex * itemWidth;
                track.style.transform = `translateX(${offset}px)`;
            };

            // Handle window resize to re-calculate itemWidth
            window.addEventListener('resize', () => {
                // Recalculate itemWidth based on the first item's current width
                // This ensures responsiveness if the layout changes on resize
                const newItemWidth = items[0] ? items[0].getBoundingClientRect().width : 0;
                if (newItemWidth !== itemWidth) { // Only update if width actually changed
                    itemWidth = newItemWidth; // Update the itemWidth variable
                    updateCarousel(); // Re-adjust carousel position
                }
            });


            // Previous button click handler
            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
                updateCarousel();
            });

            // Next button click handler
            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
                updateCarousel();
            });

            // Initial carousel update
            updateCarousel();
        });
    </script>
</body>

</html>