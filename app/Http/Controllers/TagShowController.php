<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sheets\Facades\Sheets;


class TagShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($tag)
    {
        $posts = Sheets::collection('posts')
        ->all()
        ->filter(function(Post $post)use($tag) {
            return in_array($tag,$post->tags);
        }); 

        abort_if($posts->isEmpty(), 404);
        
        return view('tags.index',
        [
            'posts' => $posts,
            'tag' => $tag
        ]); 
     }
}
