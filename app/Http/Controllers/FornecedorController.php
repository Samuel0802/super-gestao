<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
 public function index(){
  
   $fornecedores = [
    0 =>   [
      'nome' => 'Fornecedor 1',
     'status' => 'N', 
     'CNPJ' => '0',
     'RG' => '313131',
     'DD' => '92', //Manaus (AM)
     'telefone' => '98400-5764'
   ],

     1 => [
      'nome' => 'Fornecedor 1',
     'status' => 'N', 
     'CNPJ' => '00.000.000.00',
     'RG' => '3188',
     'DD' => '85', //Fortaleza (CE)
     'telefone' => '98400-0000'
       ],

       2 => [
         'nome' => 'Fornecedor 1',
        'status' => 'N', 
        'CNPJ' => '00.000.000.00',
        'RG' => '3188',
        'DD' => '32', //luiz de fora (mg)
        'telefone' => '98400-0000'
          ],

 ];


    return view('app.fornecedor.index', compact('fornecedores')); //compact: é utilizavel pra renderizar uma variavel no front
 }
}
