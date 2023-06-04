<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        User::create([
            'name' => $request->name,
        ]);
        return view('admin.doctor-add');
    }
}
