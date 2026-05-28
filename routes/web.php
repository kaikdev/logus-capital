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
        'where' => ['locale' => 'pt_BR|en|es']
    ], function () {

    // Rota Home
    Route::get('/', [EmFocoController::class, 'home'])->name('home');

    // Rota A Empresa
    Route::get('/empresa', fn() => view('pages.empresa'))->name('empresa');

    // Rota Produto TP-056E
    Route::get('/produtos/tp-056e', fn() => view('pages.tp-056e'))->name('produtos.tp-056e');

    // Rota Produto AD-035
    Route::get('/produtos/ad-035', fn() => view('pages.ad-035'))->name('produtos.ad-035');

    // Rota Áreas de Atuação
    Route::get('/areas-de-atuacao', fn() => view('pages.areas-de-atuacao'))->name('areas-de-atuacao');

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
})->where('any', '^(?!pt_BR|en|es).*$');

