<h3>Fornecedor</h3>

@php
   
@endphp

{{-- @dd($fornecedores) --}}

{{-- Condição do if no blade --}}
@if(count ($fornecedores) > 0 && count($fornecedores) < 10)
  <h3>Existe Alguns fornecedores cadastrado</h3>
    
@elseif (count($fornecedores) > 10 ) 
 <h3>Existe varios fornecedores cadastrado</h3>

 @else
 <h3>Ainda não existem fornecedores cadastrado</h3>

 @endif