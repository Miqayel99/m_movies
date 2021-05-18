@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $movie['poster_path'] }}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie['data']['nameRu'] }}</h2>
                <span class="text-1xl  mt-4 md:mt-0 ">{{ $movie['data']['slogan'] }}</span>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span class="ml-1">{{ $movie['data']['filmLength'] }}</span>
                    <span class="mx-2">|</span>
                    <span class="ml-1">{{ $movie['data']['ratingAgeLimits'] }}+</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie['release_date'] }}</span>
                    <span class="mx-2">|</span>
                    @foreach ($movie['data']['genres']  as $genre)
                    <span>{{ $genre['genre'] }}</span>
                        <span class="mx-2">|</span>
                    @endforeach
                    @foreach ($movie['data']['countries']  as $country)
                        <span>{{ $country['country'] }}</span>
                        <span class="mx-2">|</span>
                    @endforeach
                </div>
                <div>
                    <div class="mt-12">

                        <button

                            class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150 mt-1"
                        >
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2"><a href="https://www.sskinopoisk.ru/film/{{$movie['data']['filmId']}}" target="_blank">Смотреть фильм</a></span>
                        </button>
                        <button
                            class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150 mt-1"
                        >
                            <svg class="w-6 fill-current" viewBox="0 0 20 20"><path d="M10,1.75c-4.557,0-8.25,3.693-8.25,8.25c0,4.557,3.693,8.25,8.25,8.25c4.557,0,8.25-3.693,8.25-8.25C18.25,5.443,14.557,1.75,10,1.75 M10,17.382c-4.071,0-7.381-3.312-7.381-7.382c0-4.071,3.311-7.381,7.381-7.381c4.07,0,7.381,3.311,7.381,7.381C17.381,14.07,14.07,17.382,10,17.382 M7.612,10.869c-0.838,0-1.52,0.681-1.52,1.519s0.682,1.521,1.52,1.521c0.838,0,1.52-0.683,1.52-1.521S8.45,10.869,7.612,10.869 M7.612,13.039c-0.359,0-0.651-0.293-0.651-0.651c0-0.357,0.292-0.65,0.651-0.65c0.358,0,0.651,0.293,0.651,0.65C8.263,12.746,7.97,13.039,7.612,13.039 M7.629,6.11c-0.838,0-1.52,0.682-1.52,1.52c0,0.838,0.682,1.521,1.52,1.521c0.838,0,1.521-0.682,1.521-1.521C9.15,6.792,8.468,6.11,7.629,6.11M7.629,8.281c-0.358,0-0.651-0.292-0.651-0.651c0-0.358,0.292-0.651,0.651-0.651c0.359,0,0.651,0.292,0.651,0.651C8.281,7.988,7.988,8.281,7.629,8.281 M12.375,10.855c-0.838,0-1.521,0.682-1.521,1.52s0.683,1.52,1.521,1.52s1.52-0.682,1.52-1.52S13.213,10.855,12.375,10.855 M12.375,13.026c-0.358,0-0.652-0.294-0.652-0.651c0-0.358,0.294-0.652,0.652-0.652c0.357,0,0.65,0.294,0.65,0.652C13.025,12.732,12.732,13.026,12.375,13.026 M12.389,6.092c-0.839,0-1.52,0.682-1.52,1.52c0,0.838,0.681,1.52,1.52,1.52c0.838,0,1.52-0.681,1.52-1.52C13.908,6.774,13.227,6.092,12.389,6.092 M12.389,8.263c-0.36,0-0.652-0.293-0.652-0.651c0-0.359,0.292-0.651,0.652-0.651c0.357,0,0.65,0.292,0.65,0.651C13.039,7.97,12.746,8.263,12.389,8.263"></path></svg>
                            <span class="ml-2 text-center"><a href="{{$movie['data']['webUrl']}}" target="_blank">Подробнее</a></span>
                        </button>

                    </div>





                </div>


                <div class="mt-12">
                    <h4 class="text-white font-semibold">О фильме</h4>

                    <div class="flex mt-1">
                        <p class="text-gray-300 mt-1">
                            {{ implode(" ", $movie['data']['facts']) }}
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </div> <!-- end movie-info -->

{{--    <div class="movie-cast border-b border-gray-800">--}}
{{--        <div class="container mx-auto px-4 py-16">--}}
{{--            <h2 class="text-4xl font-semibold">Cast</h2>--}}
{{--            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">--}}
{{--                @foreach ($movie['cast'] as $cast)--}}
{{--                    <div class="mt-8">--}}
{{--                        <a href="{{ route('actors.show', $cast['id']) }}">--}}
{{--                            <img src="{{ $cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">--}}
{{--                        </a>--}}
{{--                        <div class="mt-2">--}}
{{--                            <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>--}}
{{--                            <div class="text-sm text-gray-400">--}}
{{--                                {{ $cast['character'] }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- end movie-cast -->--}}

{{--    <div class="movie-images" x-data="{ isOpen: false, image: ''}">--}}
{{--        <div class="container mx-auto px-4 py-16">--}}
{{--            <h2 class="text-4xl font-semibold">Images</h2>--}}
{{--            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">--}}
{{--                @foreach ($movie['images'] as $image)--}}
{{--                    <div class="mt-8">--}}
{{--                        <a--}}
{{--                            @click.prevent="--}}
{{--                                isOpen = true--}}
{{--                                image='{{ 'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'--}}
{{--                            "--}}
{{--                            href="#"--}}
{{--                        >--}}
{{--                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <div--}}
{{--                style="background-color: rgba(0, 0, 0, .5);"--}}
{{--                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"--}}
{{--                x-show="isOpen"--}}
{{--            >--}}
{{--                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">--}}
{{--                    <div class="bg-gray-900 rounded">--}}
{{--                        <div class="flex justify-end pr-4 pt-2">--}}
{{--                            <button--}}
{{--                                @click="isOpen = false"--}}
{{--                                @keydown.escape.window="isOpen = false"--}}
{{--                                class="text-3xl leading-none hover:text-gray-300">&times;--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body px-8 py-8">--}}
{{--                            <img :src="image" alt="poster">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- end movie-images -->--}}
@endsection
