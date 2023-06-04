<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        News::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return view('admin.news-edit');
    }
}
