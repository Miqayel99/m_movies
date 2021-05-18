<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
//          $searchResults = Http::withToken(config('services.tmdb.token'))
//              ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
//              ->json()['results'];
            $searchResults = Http::withHeaders([
                'X-API-KEY'=>'eefdd62f-8c26-4749-bf8a-146b2d43b275'
            ])
                ->get('https://kinopoiskapiunofficial.tech/api/v2.1/films/search-by-keyword?keyword='.$this->search)
                ->json()['films']
            ;
        }

        // dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
