<h3>Fornecedor</h3>

@php
  /*
 if(empty($varaivel)) :Se variavel possui algo valor
*/ 
@endphp


@isset($fornecedores)

{{-- Foreach ele faz uma copia do array original pra não efetar o array original  --}}
@foreach ($fornecedores as $indice => $fornecedor)
  
Fornecedor: {{  $fornecedor['nome']}}
<br>

Status: {{  $fornecedor['status']}} 
<br>

 CNPJ: {{  $fornecedor['CNPJ'] ?? 'Dado não foi preenchido'}}
 <br>

 RG: {{ $fornecedor['RG'] ?? 'Rg não foi preenchido!'}}

 <br>

 DD: {{ $fornecedor['DD'] ?? 'DD não foi preenchido!'}}

 <br>

 telefone: ({{ $fornecedor['telefone'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}} 
 <br>
 <hr>
 @endforeach

@endisset



     
  
