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
        $image = $request->file('image');
        $image_name = $image->hashName();
        $image->storeAs('public', $image_name);
        $image_name = route('home.index') . '/storage/' . $image_name;
        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_name,
        ]);
        return redirect()->route('admin.news');
    }
}
