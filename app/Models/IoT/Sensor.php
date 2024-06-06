<?php

namespace App\Models\IoT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $table = "sensors";

    protected $fillable = [
        "sensor_name",
        "value1",
        "value2",
        "value3",
    ];
}
