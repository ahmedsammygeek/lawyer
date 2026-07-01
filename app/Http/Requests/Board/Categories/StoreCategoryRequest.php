<?php

namespace App\Http\Requests\Board\Categories;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'title_ar' => 'required' , 
            'title_en' => 'required' , 
            'subtitle_ar' => 'required' , 
            'subtitle_en' => 'required' , 
            'image' => 'required|image' , 
            'icon' => 'required|image' , 
            'is_active' => 'nullable',
        ];
    }
}
