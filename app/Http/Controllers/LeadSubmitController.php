<?php

namespace App\Http\Controllers;
use App\Mail\LeadMail;
use Illuminate\Support\Facades\Mail;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use App\Models\Leads;

class LeadSubmitController extends Controller
{

    public function submit(Request $request) {
        app()->setLocale(session('locale', config('app.locale')));

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|required_without:whatsapp',
            'whatsapp' => 'nullable|string|max:20|required_without:email',
            'checkbox' => 'accepted',
        ]);

        $leads = Leads::create([
            'page_url' => $_SERVER['HTTP_REFERER'] ?? null,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->whatsapp,
        ]);

        $dados = [
            'url' => $_SERVER['HTTP_REFERER'],
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp
        ];

        if ($leads) {
            //Mail::to('web@engenhodeimagens.com.br',)->send(new LeadMail($dados));
            Mail::to(getItem('email-client'))->send(new LeadMail($dados));

            ToastMagic::success(__('toast.lead_success'));
        }
        
        return redirect()->back();
    }
}
