<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \App\Models\LogAcessos;

class LogAcessoMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        // return $next($request);
        //Criando a Log no banco de dados
    LogAcessos::create(['log' => "IP $ip requisitou a rota $rota"]);
        // return Response('Chegamos no Middleware');
          return $next($request);
    }
}
