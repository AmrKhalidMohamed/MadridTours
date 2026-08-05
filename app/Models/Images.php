<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    public function tour()
    {
        return $this->belongsTo(Tours::class, 'tour_id');
    }
    protected $fillable = [
        'image_path',
        'tour_id'
    ];

    public function getImageUrlAttribute(): string
    {
        if ($this->id !== null) {
            return route('imagesview.file', $this->id);
        }

        $path = ltrim((string) preg_replace('/^public\//', '', $this->image_path), '/');

        return asset('storage/' . $path);
    }
}
