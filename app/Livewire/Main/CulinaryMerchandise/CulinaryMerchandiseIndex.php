<?php

namespace App\Livewire\Main\CulinaryMerchandise;

use Livewire\Component;

class CulinaryMerchandiseIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.culinary-merchandise.culinary-merchandise-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
