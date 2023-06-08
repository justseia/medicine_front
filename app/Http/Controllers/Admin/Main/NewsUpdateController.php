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
        if ($request->image) {
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->storeAs('public', $image_name);
            $image_name = route('home.index') . '/storage/' . $image_name;
            $news->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $image_name,
            ]);
            return view('admin.news-edit')->with(compact('news'));
        }
        $news->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return view('admin.news-edit')->with(compact('news'));
    }
}
