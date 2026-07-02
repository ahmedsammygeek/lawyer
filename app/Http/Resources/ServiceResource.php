<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;
class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name , 
            'content' => $this->content , 
            'image' => Storage::url('services/'.$this->image) , 
            'icon' => Storage::url('services/'.$this->icon) , 
        ];
    }
}
