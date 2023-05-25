<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserComment;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function __invoke(User $user)
    {
        $doctor_orders = UserComment::latest('id')->where('user_id', $user->id)->get();
        return view('admin.profile-patient')
            ->with(compact('doctor_orders'))
            ->with(compact('user'));
    }
}
