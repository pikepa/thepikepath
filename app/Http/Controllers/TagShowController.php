<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($tag)
    {
        dd($tag); 
   }
}
