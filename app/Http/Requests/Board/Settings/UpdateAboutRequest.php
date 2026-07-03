<?php

namespace App\Http\Requests\Board\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'name_ar' => 'required' , 
            'job_title_ar' => 'required' , 
            'quote_ar' => 'required' , 
            'left_text_ar' => 'required' , 
            'right_text_ar' => 'required' , 
            'bio_ar' => 'required' , 
            'name_en' => 'required' , 
            'job_title_en' => 'required' , 
            'quote_en' => 'required' , 
            'left_text_en' => 'required' , 
            'right_text_en' => 'required' , 
            'bio_en' => 'required' , 



            'main_image' => 'nullable|image' , 
            'bio_image' => 'nullable|image' , 
        ];
    }
}
