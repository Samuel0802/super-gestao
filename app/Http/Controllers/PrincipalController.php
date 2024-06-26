<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function Home(){

       $motivo_contatos =  MotivoContato::all();//Recuperar todos os registro do banco no formato de objeto

    //    dd($motivo_contatos);

      return view('site.home', ['motivo_contatos' => $motivo_contatos]);
    }


}
