<?php

namespace App\Livewire\Simulindo\Dashbpard;

use Livewire\Component;

class DashboardIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.simulindo.dashbpard.dashboard-index', $data)
        ->extends('layouts.simulindo.app')->section('content');
    }
}
