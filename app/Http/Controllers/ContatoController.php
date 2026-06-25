<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoRequest;
use App\Mail\ContatoMail;
use App\Models\Contato;
use Illuminate\Support\Facades\Mail;
use Devrabiul\ToastMagic\Facades\ToastMagic;

class ContatoController extends Controller
{
    public function enviar(ContatoRequest $request)
    {
        app()->setLocale(session('locale', config('app.locale')));
        
        try {
            $tempo = now()->timestamp - $request->form_time;

            if ($tempo < 3) {
                ToastMagic::error(__('toast.too_fast'));
                return redirect()->back();
            }
            
            $contato = Contato::create([
                'name'    => $request->name,
                'phone'   => $request->phone,
                'email'   => $request->email,
                'message' => $request->message,
                'status'  => 'new',
            ]);
            
            $dados = $request->only(['name', 'phone', 'email', 'message']);
            
            Mail::to('web@engenhodeimagens.com.br')->send(new ContatoMail($dados));
            //Mail::to(getItem('email-client'))->send(new ContatoMail($dados));

            ToastMagic::success(__('toast.contact_success'));

        } catch (\Exception $e) {

            ToastMagic::error(__('toast.contact_error'));
        }

        return redirect()->back();
    }
}
