<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Facades\Sheets;

class PostIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('posts.index',[ 
            'posts' => Sheets::collection('posts')->all()->sortByDesc('date') 
        ]);
    }
}
