<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\User;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function __invoke()
    {
        $prices = Price::all();
        return view('admin.price')->with(compact('prices'));
    }
}
