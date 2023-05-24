<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __invoke()
    {
        $doctors = User::where('type', 2)->get();
        return view('admin.doctors')->with(compact('doctors'));
    }
}
