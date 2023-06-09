<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __invoke()
    {
        $doctors = User::where('type', 2)->get();
        return view('appointment')->with(compact('doctors'));
    }
}
