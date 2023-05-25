<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserComment;
use Illuminate\Http\Request;

class UserProfileSaveController extends Controller
{
    public function __invoke(User $user, Request $request)
    {
        UserComment::create([
            'user_id' => $user->id,
            'doctor_id' => auth()->user()->id,
            'body' => $request->body,
        ]);
        return redirect()->route('admin.user.profile', $user);
    }
}
