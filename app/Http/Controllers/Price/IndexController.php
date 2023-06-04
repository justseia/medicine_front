<?php

namespace App\Http\Controllers\Price;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $prices = Price::all();
        $services = Service::all();
        return view('price')->with(compact('prices'))->with(compact('services'));
    }
}
