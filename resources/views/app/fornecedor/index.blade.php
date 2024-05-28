<h3>Fornecedor</h3>

@php
  /*
 if(empty($varaivel)) :Se variavel possui algo valor
*/ 
@endphp


@isset($fornecedores)
Fornecedor: {{ $fornecedores[2]['nome']}}
<br>

Status: {{ $fornecedores[2]['status']}} 
<br>

 CNPJ: {{ $fornecedores[2]['CNPJ'] ?? 'Dado não foi preenchido'}}
 <br>

 RG: {{$fornecedores[2]['RG'] ?? 'Rg não foi preenchido!'}}

 <br>

 DD: {{$fornecedores[2]['DD'] ?? 'DD não foi preenchido!'}}

 <br>

 telefone: ({{$fornecedores[2]['telefone'] ?? ''}}) {{$fornecedores[2]['telefone'] ?? ''}} 
 <br>
@switch($fornecedores[2]['telefone'])
         @case('92')
           Manaus - AM             
         @break

         @case('32')
             juiz de fora - MG
         @break

         @case(85)
             Fortaleza - CE
         @break
         @default

          Estado não endetificado
        
@endswitch

@endisset

     
  
