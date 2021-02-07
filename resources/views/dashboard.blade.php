<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-sm-12 dashboard-container" style='background-image: url("https://www.itl.cat/pngfile/big/14-146530_3d-abstract-wallpapers-background-awesome-wallpapers-tech-wallpaper.jpg")' style='opacity:.5 !important'>
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div> -->
        @yield('dashboard-content')
        
    </div>
    
    <footer class="container-fluid green darken-10 py-8">
        
    </footer>
</x-app-layout>

@yield('page-scripts')