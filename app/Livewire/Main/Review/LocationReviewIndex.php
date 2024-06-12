<?php

namespace App\Livewire\Main\Review;

use Livewire\Component;

class LocationReviewIndex extends Component
{
    public function render()
    {
        $data = [];
        
        return view('livewire.main.review.location-review-index', $data)
        ->extends('layouts.main.app')->section('content');
    }
}
