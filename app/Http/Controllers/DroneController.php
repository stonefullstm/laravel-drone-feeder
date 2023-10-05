<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Drone;
use Illuminate\Http\Request;

class DroneController extends Controller
{

    public function index() {
        return Drone::all();
    }

    public function store(Request $request) {

        $drone = Drone::create([
            'name'=>$request->input('name'),
            'model'=>$request->input('model')
        ]);
    
        return $drone;
    
    }

    public function storeDelivery(Request $request, $id) {

        $delivery = new Delivery([
            'latitude'=>$request->input('latitude'),
            'longitude'=>$request->input('longitude'),
            'status'=>'PENDENTE',
        ]);

        $drone = Drone::findOrFail($id);

        $drone->deliveries()->save($delivery);

    }
}
