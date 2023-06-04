<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\DoctorOrder;
use App\Models\User;

class TimeController extends Controller
{
    public function __invoke(User $user)
    {
        $doctor_orders = DoctorOrder::latest('id')->where('user_id', $user->id)->first();
        return response()->json($doctor_orders);
    }
}
