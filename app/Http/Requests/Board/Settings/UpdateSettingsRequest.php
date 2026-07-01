<?php

namespace App\Http\Requests\Board\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'site_name_ar' => 'nullable' , 
            'site_name_en' => 'nullable' , 
            'email' => 'nullable|email' , 
            'mobile' => 'nullable' , 
            'whatsapp' => 'nullable' , 
            'address_ar' => 'nullable' , 
            'youtube' => 'nullable|url' , 
            'facebook' => 'nullable|url' , 
            'twitter' => 'nullable|url' , 
            'instagram' => 'nullable|url' , 
            'working_hours_ar' => 'nullable' , 
            'snap_chat' => 'nullable' , 
            'logo' => 'nullable|image' , 
            'contact_banner' => 'nullable|image' , 
            'shop_banner' => 'nullable|image' , 
            'covering_banner' => 'nullable|image' , 
        ];
    }
}
