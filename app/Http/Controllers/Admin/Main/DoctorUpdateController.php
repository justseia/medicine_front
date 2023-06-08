<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorUpdateController extends Controller
{
    public function __invoke(User $doctor, Request $request)
    {
        if ($request->image) {
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->storeAs('public', $image_name);
            $image_name = route('home.index') . '/storage/' . $image_name;
            $doctor->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'speciality' => $request->speciality,
                'work_experience' => $request->work_experience,
                'biography' => $request->biography,
                'image' => $image_name,
            ]);
            return redirect()->route('admin.doctors.edit', $doctor);
        }

        $doctor->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'speciality' => $request->speciality,
            'work_experience' => $request->work_experience,
            'biography' => $request->biography,
        ]);
        return redirect()->route('admin.doctors.edit', $doctor);
    }
}
