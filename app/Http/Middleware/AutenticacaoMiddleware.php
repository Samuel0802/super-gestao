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
     session_start();

     //Verificando email tem acesso a pagina protegida
     if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
        return $next($request);
     }
     else{
        //Caso não tenha vai para pagina de login
        return redirect()->route('site.login', ['erro' => 2]);
     }

    }
}
