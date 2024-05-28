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

 @isset($fornecedores[0]['CNPJ'])
 Cnpj: {{$fornecedores[0]['CNPJ']}}

  @empty($fornecedores[0]['CNPJ'])
   - vazio

    @endempty
    
 @endisset

@endisset

     
  
