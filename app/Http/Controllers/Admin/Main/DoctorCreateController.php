<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorCreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.doctor-add');
    }
}
