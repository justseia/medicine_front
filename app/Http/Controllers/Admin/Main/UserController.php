<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::where('type', 3)->get();
        return view('admin.users')->with(compact('users'));
    }
}
