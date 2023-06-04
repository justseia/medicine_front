<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\DoctorOrder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        if (auth()->user()->type == 1) {
            $orders = DoctorOrder::latest('id')->get();
        }
        $orders = DoctorOrder::where('doctor_id', auth()->user()->id)->get();
        return view('admin.dashboard')->with(compact('orders'));
    }
}
