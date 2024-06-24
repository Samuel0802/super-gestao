<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{

     //$metodo_autenticacao, $perfil são os parametros do Middleware com a devida ordem
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil): Response
    {
       echo $metodo_autenticacao.' - '.$perfil.'<br>';


if($metodo_autenticacao == 'padrao'){
  echo 'Verificar o usuario e senha no banco de dados'.$perfil.'<br>';
}

if($metodo_autenticacao == 'ldap'){
    echo 'Verificar o usuario e senha no AD'.$perfil.'<br>';
  }



  if($perfil == 'visitante'){
echo 'Exibir apenas alguns recursos';
  }
else{
    echo 'Carregar o perfil do banco de dados';
  }




//Verifica se o usuario possui acesso a rota
if(false){
    //caso usuario esteja autenticado passara direto
    return $next($request);
}
else
{
    return Response('Acesso Negado! Rota exige Autenticação');
}

    }
}
