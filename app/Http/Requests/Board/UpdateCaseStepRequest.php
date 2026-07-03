<?php

namespace App\Http\Requests\Board;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCaseStepRequest extends FormRequest
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
            'step_rank_ar' => 'required', 
            'step_rank_en' => 'required', 
            'title_ar' => 'required', 
            'title_en' => 'required', 
            'content_ar' => 'required', 
            'content_en' => 'required', 
        ];
    }
}
