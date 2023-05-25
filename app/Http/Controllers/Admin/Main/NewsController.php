<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __invoke()
    {
        $news = News::all();
        return view('admin.news')->with(compact('news'));
    }
}
