<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(User $doctor)
    {
        return view('doctor-single')
            ->with(compact('doctor'));
    }
}
