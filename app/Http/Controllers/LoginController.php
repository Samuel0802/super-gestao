<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
  public function Login(Request $request){

 //Validando se usuario existe ou não
    $erro = ' ';
    if($request->get('erro') == 1){
        $erro = 'Usuário ou senha não existe';
    }
    return view('site.login', ['titulo' => 'login', 'erro' => $erro]);
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


  //recuperando os parametros cadastro dos users para formulario login
  $email = $request->get('email');
  $senha = $request->get('senha');

  echo "Usuario: $email | Senha: $senha";
  echo '<br>';


 //Iniciar o Model User
$user = new User();
//Consulta no banco login
$usuario= $user->where('email', $email)->where('senha', $senha)->get()->first();

 //Verificando o banco se Usuario existe e jogando para suas devidas rotas
if(isset($usuario->nome)) {
  session_start();
   $_SESSION['nome'] = $usuario->nome;
   $_SESSION['email'] = $usuario->email;

   return redirect()->route('app.cliente');
} else {
    return redirect()->route('site.login', ['erro' => 1]);
}

 }

 public function Sair(){
echo 'sair';
}

}
