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

        //  dd($request);

        $ip = $request->server->get('REMOTE_ADDR');

        $sistema = $request->server->get('HTTP_SEC_CH_UA_PLATFORM');

        $rota = $request->getRequestUri();

        //Criando a Log no banco de dados
    LogAcessos::create(['log' => "IP $ip requisitou a rota $rota no sistema $sistema"]);
          return $next($request);

        // return Response('Passando pela Middleware log.acesso');
    }
}
