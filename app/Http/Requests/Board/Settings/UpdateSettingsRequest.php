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
            'logo' => 'nullable|image' , 
            'email' => 'nullable|email' , 
            'mobile' => 'nullable' , 
            'address_ar' => 'nullable' , 
            'address_en' => 'nullable' , 
            'working_hours_ar' => 'nullable' , 
            'working_hours_en' => 'nullable' , 
            'facebook' => 'nullable|url' , 
            'twitter' => 'nullable|url' , 
            'instagram' => 'nullable|url' , 
            'snap_chat' => 'nullable|url' , 
            'tiktok' => 'nullable|url' , 
        ];
    }
}
