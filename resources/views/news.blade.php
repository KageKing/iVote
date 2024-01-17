<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Latest Political News') }}
        </h2>
    </x-slot>

    <!-- Main Content -->
    <main>
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Latest Political News</h1>

            @if(count($news) > 0)
                <ul>
                    @foreach($news as $article)
                        <li class="mb-4">
                            <h3 class="text-xl font-semibold">{{ $article->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ $article->content }}</p>
                            <p class="text-gray-500 dark:text-gray-400">Published on: {{ $article->created_at->format('F j, Y') }}</p>
                            
                            <!-- Party Information (Hardcoded) -->
                            <div class="mt-2">
                                <strong>Party:</strong> 

                                @if($article->party === 'PASF')
                                    <span class="bg-blue-500 text-white p-1 rounded">Progressive Alliance for Sustainable Futures (PASF)</span>
                                @elseif($article->party === 'NUC')
                                    <span class="bg-red-500 text-white p-1 rounded">National Unity Coalition (NUC)</span>
                                @elseif($article->party === 'TLP')
                                    <span class="bg-green-500 text-white p-1 rounded">Tech Liberation Party (TLP)</span>
                                @elseif($article->party === 'CHM')
                                    <span class="bg-yellow-500 text-white p-1 rounded">Community Harmony Movement (CHM)</span>
                                @else
                                    <span class="bg-gray-500 text-white p-1 rounded">{{ $article->party }}</span>
                                @endif

                                <!-- Add more party information as needed -->
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-800">No news articles available.</p>
            @endif
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <!-- Your footer content goes here -->
    </footer>
</x-app-layout>
