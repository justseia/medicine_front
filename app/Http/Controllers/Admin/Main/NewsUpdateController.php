<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsUpdateController extends Controller
{
    public function __invoke(News $news, Request $request)
    {
        return view('admin.news-');
    }
}
