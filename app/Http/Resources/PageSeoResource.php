<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Setting;
use Storage;
class PageSeoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $social_links = Setting::first();

        return [
            'title' => $this->page_title , 
            'meta_description' => $this->meta_description , 
            'open_graph_title' => $this->open_graph_title , 
            'open_graph_description' => $this->open_graph_description , 
            'open_image_url' => Storage::url('settings/'.$this->open_image_url) , 
            'canonical_url' => $this->canonical_url , 
            'robots_index' => (bool)$this->robots_index , 
            'robots_follow' => (bool)$this->robots_follow , 
            'schema' => [
                'name' => 'علي سعيد الشامسي' , 
                'alternateName' => 'Ali Saeed Al Shamsi' , 
                'description' => 'محامٍ ومستشار قانوني في دولة الإمارات.' , 
                'url' => 'https://alilaw.ae' , 
                'image' => 'https://admin.alilaw.ae/storage/settings/logo.webp' , 
                'logo' => 'https://admin.alilaw.ae/storage/settings/logo.webp' , 
                'telephone' => $social_links->mobile  , 
                'email' => 'info@alilaw.ae' , 
                'address' => [
                    'type' => 'PostalAddress' , 
                    'addressLocality' => 'Abu Dhabi' , 
                    'addressCountry' => 'AE' , 

                ] , 
                'sameAs' => [
                    $social_links->facebook , 
                    $social_links->youtube , 
                    $social_links->twitter , 
                    $social_links->instagram , 
                    $social_links->snap_chat , 
                ] , 
            ]
        ];
    }
}
