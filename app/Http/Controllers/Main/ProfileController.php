<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorOrder;
use App\Models\User;
use App\Models\UserComment;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $my_orders = DoctorOrder::latest('id')->with(['time'])->where('user_id', auth()->user()->id)->get();
        $doctor_orders = UserComment::latest('id')->where('user_id', auth()->user()->id)->get();
        return view('profile')->with(compact('doctor_orders'))->with(compact('my_orders'));
    }
}
