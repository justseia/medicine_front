<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $image = $request->file('image');
        $image_name = $image->hashName();
        $image->storeAs('public', $image_name);
        $image_name = route('home.index') . '/storage/' . $image_name;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'speciality' => $request->speciality,
            'work_experience' => $request->work_experience,
            'biography' => $request->biography,
            'image' => $image_name,
            'password' => Hash::make('asdasdasd'),
        ]);
        return view('admin.doctor-add');
    }
}
