<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
 public function index(){
  
   $fornecedores = [
    0 =>   ['nome' => 'Fornecedor 1',
     'status' => 'N', 
     'CNPJ' => '00'],

     1 =>   ['nome' => 'Fornecedor 1',
     'status' => 'N', 
       ],

 ];

  $msg = isset($fornecedores[0]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não informado';

  echo $msg;

    return view('app.fornecedor.index', compact('fornecedores')); //compact: é utilizavel pra renderizar uma variavel no front
 }
}
