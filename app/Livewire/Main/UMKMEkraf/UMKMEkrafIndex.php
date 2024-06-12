<?php

namespace App\Livewire\Main\UMKMEkraf;

// use App\Models\Simulindo\Merchandise\Merchandise;
use Livewire\Component;

class UMKMEkrafIndex extends Component
{
    public function render()
    {
        $data = [];

        // $data = [
        //     "merchandises" => Merchandise::get(),
        // ];
        
        return view('livewire.main.UMKMEkraf.umkm-ekraf-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
