<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadSubmitController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EmFocoController;
use App\Http\Controllers\LGPDController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

Route::group([
        'prefix' => '{locale}',
        'where' => ['locale' => 'pt_br|en'],
        'middleware' => ['setlocale']
    ], function () {

    // Rota Home
    Route::get('/', [EmFocoController::class, 'home'])->name('home');

    // Rota Quem Somos
    Route::get('/quem-somos', fn() => view('pages.quem-somos'))->name('quem-somos');

    // Rota Diferenciais
    Route::get('/diferenciais', fn() => view('pages.diferenciais'))->name('diferenciais');

    // Rota Atuação
    Route::get('/atuacao', fn() => view('pages.atuacao'))->name('atuacao');

    // Rota Decisão
    Route::get('/decisao', fn() => view('pages.decisao'))->name('decisao');

    // Rota Visão
    Route::get('/visao', fn() => view('pages.visao'))->name('visao');

    // Rota Time
    Route::get('/time', fn() => view('pages.time'))->name('time');

    // Rota FAQ
    Route::get('/faq', fn() => view('pages.faq'))->name('faq');

    // Rotas Contato
    Route::get('/contato', fn() => view('pages.contato'))->name('contato');

    // Rotas Termos
    Route::view('/termos','LGPD.termos')->name('termos');
});

// Rotas Contato - Enviar
Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->middleware('contato.limit')->name('contato.enviar');

// Rotas Termos - LGPD - Destroy
Route::post('/termos/destroy', [LGPDController::class, 'destroy'])->name('lgpd.destroy');

// Rota Lead
Route::post('/lead-submit', [LeadSubmitController::class, 'submit'])->name('lead-submit');

// Rota de Tradução
Route::get('/', function () {
    $locale = session('locale') ?? config('app.locale');
    return redirect('/' . $locale);
});

// Rotas de Comandos PHP
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link criado com sucesso!';
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return 'Cache limpo com sucesso!';
});

// Redirecionar Rotas sem idiomas
Route::get('/{any}', function ($any) {
    $locale = session('locale') ?? config('app.locale');

    return redirect('/' . $locale . '/' . $any);
})->where('any', '^(?!pt_br|en).*$');