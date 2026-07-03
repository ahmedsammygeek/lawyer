<?php

namespace App\Http\Requests\Board\Topics;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTopicRequest extends FormRequest
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
            'content_ar' => 'required' , 
            'title_en' => 'required' , 
            'content_en' => 'required' , 
            'is_active' => 'nullable' , 
            'category_id' => 'required' , 
            'image' => 'nullable|image' , 
        ];
    }
}
