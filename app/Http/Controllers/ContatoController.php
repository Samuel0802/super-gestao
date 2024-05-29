<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 public function Contato(){

  var_dump($_POST); //visualizar os dados do formulario no navegador
   return view('site.contato');
 }
}
