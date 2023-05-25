<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use App\Models\UserComment;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $doctor_orders = UserComment::where('user_id', auth()->user()->id)->get();
        return view('profile')->with(compact('doctor_orders'));
    }
}
