<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;


//Novo estilo de criar as rotas
route::get('/', [\App\Http\Controllers\PrincipalController::class, 'home'])->name('site.index');
route::get('/sobre', [\App\Http\Controllers\SobreNosController::class, 'SobreNos'])->name('site.sobrenos');
route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'Contato'])->name('site.contato');
route::get('/login', function(){ return 'Login';})->name('site.login');


//rota com acesso restrito
Route::prefix('/app')->group(function(){
route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
route::get('/produto', function(){ return 'Produtos';})->name('app.produto');
});


//Redirecionamento de rotas
route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site-rota1');

route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'Teste'])->name('teste');

//Rota fallback não aparecer erro quando não encontrar uma rota
route::fallback(function(){
  echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para pagina inicial';
});
