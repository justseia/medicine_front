<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Service $service)
    {
        return view('service-single')->with(compact('service'));
    }
}
