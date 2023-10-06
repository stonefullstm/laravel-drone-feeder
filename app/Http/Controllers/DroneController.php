<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Drone;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DroneController extends Controller
{

    public function index() {
        return Drone::with('deliveries:id,latitude,longitude,data_entrega,status,drone_id')
            ->get(['id', 'name', 'model']);
    }

    public function store(Request $request) {

        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'model' => 'required',
        ]);

        if ($validation->fails()) {

            $errors = $validation->errors();
            return $errors->toJson();
            
        } else {
            $drone = Drone::create([
                'name'=>$request->input('name'),
                'model'=>$request->input('model')
            ]);
        
            return $drone;
        }
    
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
