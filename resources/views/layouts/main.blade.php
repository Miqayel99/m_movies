<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://iconsplace.com/wp-content/uploads/_icons/1a202c/256/png/film-2-icon-256.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M_Movies</title>

    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">

                <li class="md:ml-16 mt-3 md:mt-0">

                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300 text-lg">
                        <svg href="{{ route('movies.index') }}" class="svg-icon" viewBox="0 0 20 20">
                            <path d="M18.175,4.142H1.951C1.703,4.142,1.5,4.344,1.5,4.592v10.816c0,0.247,0.203,0.45,0.451,0.45h16.224c0.247,0,0.45-0.203,0.45-0.45V4.592C18.625,4.344,18.422,4.142,18.175,4.142 M4.655,14.957H2.401v-1.803h2.253V14.957zM4.655,12.254H2.401v-1.803h2.253V12.254z M4.655,9.549H2.401V7.747h2.253V9.549z M4.655,6.846H2.401V5.043h2.253V6.846zM14.569,14.957H5.556V5.043h9.013V14.957z M17.724,14.957h-2.253v-1.803h2.253V14.957z M17.724,12.254h-2.253v-1.803h2.253V12.254zM17.724,9.549h-2.253V7.747h2.253V9.549z M17.724,6.846h-2.253V5.043h2.253V6.846z" fill="#fff"></path>
                        </svg>
                        M. Movies</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown></livewire:search-dropdown>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="mt-3 border border-t border-gray-800">
        <div class="container mx-auto text-sm px-4 py-6">
            Powered by <a target="_blank" href="https://kinopoiskapiunofficial.tech" class="underline hover:text-gray-300">Kinopoisk API</a>
        </div>
    </footer>
    <livewire:scripts>
    @yield('scripts')
</body>
</html>
