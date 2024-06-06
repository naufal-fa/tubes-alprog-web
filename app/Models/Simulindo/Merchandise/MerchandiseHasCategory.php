<?php

namespace App\Models\Simulindo\Merchandise;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Simulindo\Merchandise\MerchandiseCategory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MerchandiseHasCategory extends Model
{
    use HasFactory;

    protected $table = 'merchandise_has_categories';

    protected $fillable = [
        'merchandise_id',
        'category_id',
    ];

    public function category() : HasMany{
        return $this->hasMany(MerchandiseCategory::class, 'id', 'category_id');
    }

    public function merchandise() : HasOne{
        return $this->hasOne(Merchandise::class, 'id', 'merchandise_id');
    }
}
