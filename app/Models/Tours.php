<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Images::class, 'tour_id');
    }

    protected $fillable = [
        'id',
        'title',
        'type',
        'start_date',
        'end_date',
        'price',
        'description',
        'ArDescription',
        'discount'
    ];
}
