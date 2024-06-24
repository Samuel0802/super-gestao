<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
  public function Login(){
    return view('site.login');
  }

  public function Autenticar(Request $request){

     //Regras de validação
     $regras = [
        'email' => 'email',
        'senha' => 'required',
     ];

//as mensagens de feedback de validação
     $feedback = [
     'email.email' => 'O campo email é obrigatório',
      'senha.required' => 'O campo senha é obrigatório',
     ];

     //se não passar pelo validate
  $request->validate($regras, $feedback);
  //Fim da validação dos campo


  //recuperando os parametros do formulario login
  $email = $request->get('email');
  $senha = $request->get('senha');

  echo "Usuario: $email | Senha: $senha";
  echo '<br>';

  //Iniciar o Model User
$user = new User();

//Consulta no banco login
$usuario= $user->where('email', $email)->where('senha', $senha)->get()->first();

 //Verificando o banco se Usuario existe
if(isset($usuario->nome)) {
    echo 'Usuário existe';
} else {
    echo 'Usuário não existe';
}


 }
}
