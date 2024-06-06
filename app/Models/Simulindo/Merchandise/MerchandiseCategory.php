<?php

namespace App\Models\Simulindo\Merchandise;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchandiseCategory extends Model
{
    use HasFactory;

    
    protected $table = 'merchandise_categories';

    protected $fillable = [
        'name',
    ];
}
