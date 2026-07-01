<?php

namespace App\Http\Requests\Board\Categories;

use Illuminate\Foundation\Http\FormRequest;
use Request;
class UpdateCategoryRequest extends FormRequest
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
        $id = Request::segment(3);
        return [
            'title_ar' => 'required' , 
            'title_en' => 'required' , 
            'subtitle_ar' => 'required' , 
            'subtitle_en' => 'required' , 
            'image' => 'nullable|image' , 
            'icon' => 'nullable|image' , 
            'is_active' => 'nullable',
        ];
    }
}
