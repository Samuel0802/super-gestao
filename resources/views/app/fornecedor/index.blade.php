<h3>Fornecedor</h3>

@php
  /*
 if(empty($varaivel)) :Se variavel possui algo valor
*/ 
@endphp


@isset($fornecedores)

{{-- Foreelse:  $fornecedores estiver vazio poderá ser jogado ao @empty  --}}
@forelse ($fornecedores as $indice => $fornecedor)
  
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
 @empty
  Não existem fornecedores cadastrado
 @endforelse

@endisset



     
  
