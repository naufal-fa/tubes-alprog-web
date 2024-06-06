<?php

namespace App\Models\Simulindo\Merchandise;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Merchandise extends Model
{
    use HasFactory;

    protected $table = 'merchandises';

    protected $fillable = [
        'name',
        'description',
        'price',
        'location',
        'image',
    ];

    public function category() : HasMany{
        return $this->hasMany(MerchandiseHasCategory::class, 'merchandise_id', 'id');
    }
}
