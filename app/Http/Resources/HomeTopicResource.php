<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;
use Str;
class HomeTopicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id , 
            'title' => $this->title , 
            'content' =>   Str::squish(html_entity_decode($strip_tags($this->content))) , 
            'image' => Storage::url('topics/'.$this->image) , 
            'category' => new CategoryResource($this->category) , 
        ];
    }
}
