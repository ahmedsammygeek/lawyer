<?php

namespace App\Http\Requests\Board\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'is_active' => 'nullable' , 
            'is_offer' => 'nullable' , 
            'name_ar' => 'required' , 
            'name_en' => 'required' , 
            'content_ar' => 'required' , 
            'content_en' => 'required' , 
            'image' => 'required|image' , 
            'banner' => 'nullable|image' , 
            'price' => 'nullable' , 
            'discount' => 'nullable'  , 
            'rate' => 'required' , 
            'category_id' => 'required' , 
        ];
    }
}
