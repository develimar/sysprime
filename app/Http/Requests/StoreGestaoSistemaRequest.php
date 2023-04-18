<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGestaoSistemaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'descricao' => 'required|min:3|max:90|string',
            'link' => 'required|string|max:90|min:3',
            'usuario' => 'required|string|max:90|min:3',
            'senha' => 'required|string|max:50|min:3'
        ];
    }
}
