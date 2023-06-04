<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsCreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.news-add');
    }
}
