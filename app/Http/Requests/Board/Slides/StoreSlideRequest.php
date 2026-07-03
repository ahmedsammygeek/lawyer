<?php

namespace App\Http\Requests\Board\Slides;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlideRequest extends FormRequest
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
            'image' => 'required|image' , 
            'title_ar' => 'required' , 
            'title_en' => 'required' , 
            'subtitle_ar' => 'required' , 
            'subtitle_ar' => 'required' , 
            'content_ar' => 'required' , 
            'content_en' => 'required' , 
            'head_title_ar' => 'required' , 
            'head_title_ar' => 'required' , 
            'is_active' => 'nullable' , 
        ];
    }
}
