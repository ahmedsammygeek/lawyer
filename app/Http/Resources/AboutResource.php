<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;
class AboutResource extends JsonResource
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
            'job_title' => $this->job_title ,         
            'quote' => $this->quote ,         
            'left_text' => $this->left_text ,         
            'right_text' => $this->right_text ,         
            'bio' => $this->bio ,         
            'bio_image' => Storage::url('about/'.$this->bio_image) ,         
            'main_image' => Storage::url('about/'.$this->main_image) ,         
        ];
    }
}
