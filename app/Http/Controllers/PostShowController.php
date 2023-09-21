<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
       return view('posts.show', [ 'post' => $post]);
    }
}
