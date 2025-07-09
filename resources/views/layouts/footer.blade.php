@extends('layouts.app')

@section('footer')
<!-- Footer -->
<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4 text-center">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <div class="mb-4 md:mb-0">
                <h3 class="text-2xl font-bold mb-2">Gaming Blog</h3>
                <p class="text-gray-400">&copy; {{ date('Y') }} All rights reserved.</p>
            </div>

            <!-- Social Media Links -->
            <div class="flex space-x-6 mb-4 md:mb-0">
                <a href="#" class="text-gray-400 hover:text-theme-red transition-colors duration-300"
                    aria-label="Facebook">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.505 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-theme-blue transition-colors duration-300"
                    aria-label="Twitter">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.007-.532A8.318 8.318 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 014 9.74c-.095 0-.189.007-.283.014a4.102 4.102 0 003.292 4.022 4.095 4.095 0 01-1.844.07 4.102 4.102 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-theme-yellow transition-colors duration-300"
                    aria-label="Instagram">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.707 12.707a1 1 0 00-1.414-1.414L12 14.586l-2.293-2.293a1 1 0 00-1.414 1.414L10.586 16l-2.293 2.293a1 1 0 001.414 1.414L12 17.414l2.293 2.293a1 1 0 001.414-1.414L13.414 16l2.293-2.293z"
                            clip-rule="evenodd" />
                        <path d="M12 5a7 7 0 100 14 7 7 0 000-14zM12 7a5 5 0 100 10 5 5 0 000-10z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </a>
            </div>

            <!-- Contact Info -->
            <div class="text-gray-400">
                <p class="mb-1">Email: info@gamingblog.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
        </div>
        <p class="text-sm text-gray-500 mt-4">Built with Laravel & Tailwind CSS</p>
    </div>
</footer>
@endsection