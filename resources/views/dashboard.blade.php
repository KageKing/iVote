<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-indigo-800 dark:text-indigo-300 leading-tight">
            {{ __('Welcome to iVote') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-700 via-pink-600 to-red-600">
        <div class="w-full">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg p-8 text-center">
                <div class="text-5xl font-extrabold text-indigo-800 dark:text-indigo-300 mb-6">
                    {{ __("🚀 Welcome to iVote 🗳") }}
                </div>
                <div class="text-lg text-gray-700 dark:text-gray-300 mb-8">
                    {{ __("Empowering your voice for a better tomorrow. Join our global community and be part of the change!") }}
                </div>
                <div class="flex items-center justify-center space-x-4">
                    <a href="#" class="bg-indigo-800 hover:bg-indigo-900 text-white font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out">
                        {{ __("Get Started") }}
                    </a>
                    <a href="#" class="text-indigo-400 hover:underline">{{ __("Learn more") }}</a>
                </div>
              
                <!-- Testimonial Section -->
                <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-purple-700 p-6 rounded-lg text-white">
                        <div class="text-xl font-bold mb-4">"iVote changed the way I engage in the democratic process."</div>
                        <p class="text-gray-300">- Jane Doe</p>
                        <img src="{{ asset('images/user1.jpg') }}" alt="User 1" class="mt-4 rounded-full w-12 h-12 mx-auto">
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-blue-700 p-6 rounded-lg text-white">
                        <div class="text-xl font-bold mb-4">"Being part of iVote gives me a sense of empowerment."</div>
                        <p class="text-gray-300">- John Smith</p>
                        <img src="{{ asset('images/user2.jpg') }}" alt="User 2" class="mt-4 rounded-full w-12 h-12 mx-auto">
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-green-700 p-6 rounded-lg text-white">
                        <div class="text-xl font-bold mb-4">"iVote is user-friendly and impactful."</div>
                        <p class="text-gray-300">- Mary Johnson</p>
                        <img src="{{ asset('images/user3.jpg') }}" alt="User 3" class="mt-4 rounded-full w-12 h-12 mx-auto">
                    </div>
                </div>

                <!-- Enhanced Masterpiece Addition -->
                <div class="mt-16 bg-gradient-to-r from-purple-500 via-blue-500 to-green-500 p-12 rounded-lg">
                    <h3 class="text-4xl font-extrabold text-white mb-6 animate__animated animate__fadeInUp">
                        Discover the Power of Your Voice
                    </h3>
                    <p class="text-lg text-white opacity-80 mb-8 animate__animated animate__fadeInUp">
                        Engage, Vote, and Impact Change. Your voice matters!
                    </p>
                    <a href="#" class="bg-white text-indigo-800 hover:bg-indigo-900 font-bold py-3 px-8 rounded-full shadow-md transition duration-300 ease-in-out inline-block animate__animated animate__fadeInUp">
                        Join Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
