<h3>Fornecedor</h3>

@php
   
@endphp

{{-- @dd($fornecedores) --}}

{{-- Condição do if no blade --}}

Fornecedor: {{ $fornecedores[0]['nome']}}
 <br>

 Status: {{ $fornecedores[0]['status']}} 
 <br>

 @if ($fornecedores[0]['status'] == 'N')
  <p>Fornecedor Inativo</p>

{{-- Se o retorno da condição for false  --}}
  @unless ($fornecedores[0]['status'] == 'S') 
  <p>Fornecedor Inativo</p>
  @endunless
     
  @endif
