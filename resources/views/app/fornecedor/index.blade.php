<h3>Fornecedor</h3>

@php
  /*
 if(empty($varaivel)) :Se variavel possui algo valor
*/ 
@endphp


@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome']}}
<br>

Status: {{ $fornecedores[0]['status']}} 
<br>

 CNPJ: {{ $fornecedores[0]['CNPJ'] ?? 'Dado não foi preenchido'}}
 <br>
 
 RG: {{$fornecedores[1]['RG'] ?? 'Rg não foi preenchido!'}}
 {{-- $variavel testada não estiver definida
    ou
    $variavel testada possuir o valor null
    --}}
@endisset

     
  
