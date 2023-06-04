<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $doctors = User::where('type', 2)->get();
        return view('our-doctors')
            ->with(compact('doctors'));
    }
}
