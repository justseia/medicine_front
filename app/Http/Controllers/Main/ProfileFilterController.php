<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\UserComment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfileFilterController extends Controller
{
    public function __invoke(Request $request)
    {
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);

        $doctor_orders = UserComment::whereDate('created_at', '>=', $start)->whereDate('created_at', '<=', $end)->get();
        return view('profile')->with(compact('doctor_orders'));
    }
}
