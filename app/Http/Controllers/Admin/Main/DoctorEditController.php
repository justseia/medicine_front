<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorEditController extends Controller
{
    public function __invoke(User $doctor)
    {
        return view('admin.doctor-edit')->with(compact('doctor'));
    }
}
