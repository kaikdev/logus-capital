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

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'checkbox' => 'accepted',
        ]);

        $leads = Leads::create([
            'page_url' => $_SERVER['HTTP_REFERER'],
            'name' => $request->name,
            'email' =>  $request->email,
        ]);

        $dados = [
            'url' => $_SERVER['HTTP_REFERER'],
            'name' => $request->name,
            'email' =>  $request->email,
        ];

        if ($leads) {
            // Mail::to('web@engenhodeimagens.com.br',)->send(new LeadMail($dados));
            Mail::to(getItem('email-client'))->send(new LeadMail($dados));

            ToastMagic::success(__('toast.lead_success'));
        }
        
        return redirect()->back();
    }
}
