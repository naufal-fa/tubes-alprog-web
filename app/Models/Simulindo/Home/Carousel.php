<?php

namespace App\Models\Simulindo\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $table = "carousels";

    protected $fillable = [
        "title",
        "subtitle",
        "description",
        "image",
        "link",
    ];
}
