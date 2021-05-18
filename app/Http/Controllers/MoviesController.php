<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\MovieViewModel;
use App\ViewModels\MoviesViewModel;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $popularMovies = Http::withToken(config('services.tmdb.token'))
//            ->get('https://api.themoviedb.org/3/movie/popular')
//            ->json()['results'];

//        $popularMovies = Http::withToken(config('services.X-API-KEY.token'))->get('https://kinopoiskapiunofficial.tech/api/v2.2/films/top?type=TOP_250_BEST_FILMS&page=1')
//
//            ->json();
        $popularMovies = Http::withHeaders([
            'X-API-KEY'=>'eefdd62f-8c26-4749-bf8a-146b2d43b275'
        ])
            ->get('https://kinopoiskapiunofficial.tech/api/v2.2/films/top?type=TOP_250_BEST_FILMS&page=1')
            ->json()['films']
        ;

//        dd($popularMovies[0]);

//        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
//            ->get('https://api.themoviedb.org/3/movie/now_playing')
//            ->json()['results'];

        $genres = Http::withHeaders([
            'X-API-KEY'=>'eefdd62f-8c26-4749-bf8a-146b2d43b275'
        ])
            ->get('https://kinopoiskapiunofficial.tech/api/v2.1/films/filters')
            ->json();
//        dd($genres);

        $viewModel = new MoviesViewModel(
            $popularMovies,
//            $nowPlayingMovies,
//            $genres,
        );

        return view('movies.index', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $movie = Http::withToken(config('services.tmdb.token'))
//            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
//            ->json();
        $movie = Http::withHeaders([
            'X-API-KEY'=>'eefdd62f-8c26-4749-bf8a-146b2d43b275'
        ])
            ->get('https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$id)
            ->json();
//        dd($movie['data']);

        $viewModel = new MovieViewModel($movie);

        return view('movies.show', $viewModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
