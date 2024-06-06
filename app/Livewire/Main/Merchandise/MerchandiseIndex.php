<?php

namespace App\Livewire\Main\Merchandise;

use App\Models\Simulindo\Merchandise\Merchandise;
use Livewire\Component;

class MerchandiseIndex extends Component
{
    public function render()
    {
        $data = [
            "merchandises" => Merchandise::get(),
        ];
        
        return view('livewire.main.merchandise.merchandise-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
