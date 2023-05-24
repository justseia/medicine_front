<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\DoctorOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        DoctorOrder::create([
            'time' => $request->date . ', ' . $request->time,
            'user_id' => auth()->user()->id,
            'user_name' => auth()->user()->name,
            'doctor_id' => $request->doctor,
        ]);
        return redirect()->route('home.index');
    }
}
