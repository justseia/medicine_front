<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use App\Models\UserComment;
use Illuminate\Http\Request;

class ProfileUpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        auth()->user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'weight' => $request->weight,
            'height' => $request->height,
            'biography' => $request->biography,
        ]);
        return redirect()->route('profile.index');
    }
}
