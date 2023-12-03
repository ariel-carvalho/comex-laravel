<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
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
        return ["nome" => ["required", "min:3", "max:128"]];
    }

    public function messages()
    {
        return
        [
            "required" => "O campo :attribute é obrigatório",
            "min" => "O campo :attribute deve ter no mínimo :min caracteres",
            "max"=> "O campo :attribute deve ter no mínimo :max caracteres"
        ];
    }
}
