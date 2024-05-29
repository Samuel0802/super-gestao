<h3>Fornecedor</h3>

@php
  /*
 if(empty($varaivel)) :Se variavel possui algo valor
*/ 
@endphp


@isset($fornecedores)

@for ($i = 0; isset($fornecedores[$i]); $i++)
  
Fornecedor: {{ $fornecedores[$i]['nome']}}
<br>

Status: {{ $fornecedores[$i]['status']}} 
<br>

 CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? 'Dado não foi preenchido'}}
 <br>

 RG: {{$fornecedores[$i]['RG'] ?? 'Rg não foi preenchido!'}}

 <br>

 DD: {{$fornecedores[$i]['DD'] ?? 'DD não foi preenchido!'}}

 <br>

 telefone: ({{$fornecedores[$i]['telefone'] ?? ''}}) {{$fornecedores[$i]['telefone'] ?? ''}} 
 <br>
 <hr>
 @endfor
@endisset



     
  
