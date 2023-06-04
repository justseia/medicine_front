<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Service $service, Request $request)
    {
        ServiceOrder::create([
            'name' => $request->name,
            'number' => $request->number,
            'service_id' => $service->id,
        ]);
        return redirect()->route('service.show', $service);
    }
}
