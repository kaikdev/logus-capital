<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'    => 'required|string|max:255',
            'phone' => 'nullable|string|max:20|required_without:email',
            'email' => 'nullable|email|max:255|required_without:phone',
            'message' => 'required|string|min:5',
            'website' => 'nullable|size:0',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Informe seu nome',

            'email.required_without' => 'Informe um e-mail ou telefone',
            'phone.required_without' => 'Informe um e-mail ou telefone',

            'email.email'      => 'E-mail inválido',
            'message.required' => 'Digite sua mensagem',
            'website.size'     => 'Ação inválida.',
        ];
    }
}