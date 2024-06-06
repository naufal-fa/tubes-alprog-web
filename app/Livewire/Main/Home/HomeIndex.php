<?php

namespace App\Livewire\Main\Home;

use Livewire\Component;
use App\Models\Simulindo\Home\Carousel;
use App\Models\Simulindo\Home\Testimonial;
use App\Models\IoT\Sensor;

class HomeIndex extends Component
{
    public function render()
    {
        $data = [
            'carousels' => Carousel::get(),
            'testimonials' => Testimonial::get(),
            'sensors' => Sensor::get()->where('sensor_name', 'uji_coba')->last(),
        ];
        
        return view('livewire.main.home.home-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
