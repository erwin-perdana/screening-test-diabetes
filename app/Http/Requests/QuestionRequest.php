<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'question' => 'required',
            "informations"    => "required|array|min:1",
            "informations.*"  => "required|string|min:1",
            "poins"    => "required|array|min:1",
            "poins.*"  => "required|numeric|min:1",
        ];
    }
}
