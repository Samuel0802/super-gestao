<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;


//Novo estilo de criar as rotas
route::middleware('log.acesso')->get('/', [\App\Http\Controllers\PrincipalController::class, 'Home'])->name('site.home');
route::get('/sobre', [\App\Http\Controllers\SobreNosController::class, 'SobreNos'])->name('site.sobrenos');
route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'Contato'])->name('site.contato');
route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'Salvar'])->name('site.contato');
route::get('/login',[LoginController::class, 'Login'])->name('site.login');
route::post('/login',[LoginController::class, 'Autenticar'])->name('site.login');


//rota com acesso restrito
Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function(){
    //middleware: 1 validação se usuario esta autenticado nomes passado pelo kernel
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
