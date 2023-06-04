<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\DoctorOrder;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {

        $orders = DoctorOrder::where('doctor_id', $request->doctor_id)->get();
        foreach ($orders as $order) {
            $time_avarage = Service::find($request->service_id)->complexity + $request->time_id;
            if ($order->time_id <= $time_avarage && $time_avarage <= $order->time_id + $order->complexity) {
                return redirect()->route('appointment.index')->withErrors(['msg' => 'Сервис занимает больше времени. Запишитесь на другое время']);
            }
        }

        DoctorOrder::create([
            'day' => $request->day,
            'user_name' => auth()->user()->name,
            'user_id' => auth()->user()->id,
            'time_id' => $request->time_id,
            'complexity' => Service::find($request->service_id)->complexity,
            'doctor_id' => $request->doctor_id,
        ]);
        return redirect()->route('home.index');
    }
}
