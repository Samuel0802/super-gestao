<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 public function Contato(Request $request){

   return view('site.contato');
 }

 public function Salvar(Request $request){

//Realizar a validação dos dados Formulario recebidos do request
$request->validate([
    'nome' => 'required',
    'telefone' => 'required',
    'email' => 'required',
    'motivo_contato' => 'required',
    'descricao' => 'required',

]);

//   SiteContato::create($request->all());
 }

}
