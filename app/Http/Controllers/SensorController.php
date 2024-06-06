<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IoT\DHTSensor;

class SensorController extends Controller
{
    public function send_sensor() {
        DHTSensor::create([
            'temperature' => request()->temperature,
            'humidity' => request()->humidity,
        ]);
    }
}
