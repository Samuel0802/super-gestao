<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use App\Models\MotivoContato;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 public function Contato(Request $request){


    $motivo_contatos =  MotivoContato::all();//Recuperar todos os registro do banco no formato de objeto no select do form

    return view('site.contato',['motivo_contatos' => $motivo_contatos]);//compact na view
 }

 public function Salvar(Request $request){

//Realizar a validação dos dados Formulario recebidos do request
$request->validate([
    'nome' => 'required|min:3|max:40', //nomes com no minimo 3 caracteres e no maximo 40
    'telefone' => 'required',
    'email' => 'email|unique:site_contatos', //email seja apenas valores unico da tabela site_contatos
    'motivo_contatos_id' => 'required',
    'mensagem' => 'required|max:2000',

]);

  SiteContato::create($request->all());
  return redirect()->route('site.home');
 }



}
