<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    public function movie()
    {
        return collect($this->movie)->merge([
            'poster_path' => $this->movie['data']
                ? $this->movie['data']['posterUrl']
                : 'https://via.placeholder.com/500x750',
            'vote_average' => $this->movie['data']['ratingMpaa'],
            'release_date' => $this->movie['data']['year'],
            'genres' => collect($this->movie['data']['genres'])->pluck('name')->flatten()->implode(', '),
//            'overview'=> implode($this->movie['data']['facts'])
//            'crew' => collect($this->movie['credits']['crew'])->take(2),
//            'cast' => collect($this->movie['credits']['cast'])->take(5)->map(function($cast) {
//                return collect($cast)->merge([
//                    'profile_path' => $cast['profile_path']
//                        ? 'https://image.tmdb.org/t/p/w300'.$cast['profile_path']
//                        : 'https://via.placeholder.com/300x450',
//                ]);
//            }),
//            'images' => collect($this->movie['images']['backdrops'])->take(9),
//        ])->only([
//            'poster_path', 'id', 'genres', 'title', 'vote_average', 'overview', 'release_date', 'credits' ,

        ]);
    }
}
