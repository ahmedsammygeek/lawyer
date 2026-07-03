<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;
class SlideResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'head_title' => $this->head_title , 
            'title' => $this->head_title , 
            'sub_title' => $this->head_title , 
            'content' => $this->head_title , 
            'image' => Storage::url('slides/'.$this->image), 
        ];
    }
}
