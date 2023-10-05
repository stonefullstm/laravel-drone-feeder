<?php

namespace App\Http\Controllers;

use App\Models\Drone;
use Illuminate\Http\Request;

class DroneController extends Controller
{
    public function store(Request $request) {

        $drone = Drone::create([
            "name"=>$request->input("name"),
            "model"=>$request->input("model")
        ]);
    
        return $drone;
    
    }
}
