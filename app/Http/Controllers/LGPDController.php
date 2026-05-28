<?php
namespace App\Http\Controllers;

use App\Models\Leads;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Devrabiul\ToastMagic\Facades\ToastMagic;

class LGPDController extends Controller
{
    public function destroy(Request $request)
    {
        $request->validate([
            'nome'      => 'required|string',
            'email'     => 'required|email',
            'telephone' => 'required|string',
        ]);

        $phone = preg_replace('/\D/', '', $request->telephone);

        // LEADS
        $leads = Leads::where('name', 'like', '%' . $request->nome . '%')
            ->orWhere('email', $request->email)
            ->orWhereRaw("REGEXP_REPLACE(phone, '[^0-9]', '') = ?", [$phone])
            ->get();

        $lead = $leads->first(function ($lead) use ($request, $phone) {
            $matchName  = str_contains(strtolower($lead->name), strtolower($request->nome));
            $matchEmail = $lead->email === $request->email;
            $matchPhone = preg_replace('/\D/', '', $lead->phone) === $phone;

            return ($matchName + $matchEmail + $matchPhone) >= 2;
        });

        // CONTATOS
        $contatos = Contato::where('name', 'like', '%' . $request->nome . '%')
            ->orWhere('email', $request->email)
            ->orWhereRaw("REGEXP_REPLACE(phone, '[^0-9]', '') = ?", [$phone])
            ->get();

        $contato = $contatos->first(function ($contato) use ($request, $phone) {
            $matchName  = str_contains(strtolower($contato->name), strtolower($request->nome));
            $matchEmail = $contato->email === $request->email;
            $matchPhone = preg_replace('/\D/', '', $contato->phone) === $phone;

            return ($matchName + $matchEmail + $matchPhone) >= 2;
        });

        // Remoção
        $deleted = false;

        if ($lead) {
            $lead->delete();
            $deleted = true;
        }

        if ($contato) {
            $contato->delete();
            $deleted = true;
        }

        if ($deleted) {
            Cookie::queue(Cookie::forget('enviouPopupSaida'));
            ToastMagic::success(__('lgpd.toast.success'));
            return redirect()->back();
        }

        ToastMagic::error(__('lgpd.toast.not_found'));
        return redirect()->back();
    }
}