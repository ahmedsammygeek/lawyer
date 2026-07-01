<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'phone' => '01000000000' , 
            'email' => 'info@email.com' , 
            'address' => 'الحى العشر بجوار كرفور المعادى' , 
            'facebook' => 'https://www.facebook.com/' , 
            'instagram' => 'https://instagram.com/' , 
            'tiktok' => 'https://www.tiktok.com/' , 
            'snapchat' => 'https://www.snapchat.com/' , 
            'twitter' => 'https://www.twitter.com/' , 
            'small_about' => 'لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك' , 
        ];
    }
}
