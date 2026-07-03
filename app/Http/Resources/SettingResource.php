<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Storage;
class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'logo' => Storage::url('settings/'.$this->logo) , 
            'phone' => $this->mobile  , 
            'email' =>  $this->email  , 
            'address' =>$this->address , 
            'working_hours' => $this->working_hours , 
            'facebook' =>  $this->facebook  , 
            'instagram' =>  $this->instagram  , 
            'tiktok' =>  $this->tiktok  , 
            'snapchat' => $this->snap_chat  , 
            'twitter' => $this->twitter  , 
            'small_about' => $this->about ,
        ];
    }
}
