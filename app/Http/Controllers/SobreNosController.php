<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
use App\http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller

//Passando Middleware passando no construtor do controller
{
 public function __construct(){
    $this->middleware(LogAcessoMiddleware::class);
 }

  public function SobreNos(){
    $motivo_contatos =  MotivoContato::all();//Recuperar todos os registro do banco no formato de objeto

    return view('site.sobrenos', ['motivo_contatos' => $motivo_contatos]);
  }
}
