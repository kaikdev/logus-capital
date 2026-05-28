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
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|min:5',
            'website' => 'nullable|size:0',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Informe seu nome',
            'email.required'   => 'Informe seu e-mail',
            'email.email'      => 'E-mail inválido',
            'message.required' => 'Digite sua mensagem',
            'website.size'     => 'Ação inválida.',
        ];
    }
}