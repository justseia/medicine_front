<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(News $news)
    {
        return view('news-single')->with(compact('news'));
    }
}
