<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AviaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:100',
            'n_litros' => 'required|min:1|max:30',
            'fornecedores' => 'required|min:3|max:255',
            'kmsrealizados' => 'required|min:1|max:30',
            'total_poltronas' => 'required|min:1|max:30',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
