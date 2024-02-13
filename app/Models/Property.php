<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'room',
        'bathroom',
        'garage',
        'surface',
        'status',
        'price',
        'picture1',
        'picture2',
        'picture3',
        'picture4',
        'picture5',
        'picture6',
        'city_id',
        'category_id',
        'yearOfBuild',
        'description',
        'adresse',
    ];
    public function city(): BelongsTo {
        return $this->belongsTo(City::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

}
