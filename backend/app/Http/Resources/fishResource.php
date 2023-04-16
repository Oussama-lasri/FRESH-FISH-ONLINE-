<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class fishResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'=> $this->title,
            'price'=> $this->price,
            'description'=> $this->description,
            'status'=> $this->status,
            'category_id'=> $this->category_id,
            'buy_by_id'=> $this->buy_by_id,
        ];
    }
}