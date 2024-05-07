<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TourResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Assuming you have a relationship defined in your Tours model to fetch images
        // Adjust the relationship name accordingly if it's different
        $images = $this->images()->pluck('image_path')->toArray();

        return [
            'id' => $this->id,
            'title' => $this->title,
            'type' => $this->type,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'price' => $this->price,
            'description' => $this->description,
            'ArDescription' => $this->ArDescription,
            'discount' => $this->discount,
            'images' => $images,
        ];
    }
}
