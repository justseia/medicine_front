<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorOrder;
use App\Models\User;
use App\Models\UserComment;
use Illuminate\Http\Request;

class ProfileDeleteController extends Controller
{
    public function __invoke(DoctorOrder $order)
    {
        $order->delete();
        return redirect()->route('profile.index');
    }
}
