<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;


//Novo estilo de criar as rotas
route::get('/', [\App\Http\Controllers\PrincipalController::class, 'home']);

route::get('/sobre', [\App\Http\Controllers\SobreNosController::class, 'SobreNos']);

route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'Contato']);

