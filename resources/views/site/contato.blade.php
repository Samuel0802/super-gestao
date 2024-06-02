
@extends('site.home')

{{-- titulo dinamico --}}
@section('titulo', '/Contato')

@section('content')


        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    {{-- component  visualizar mesmo formulário e demais view--}}
                    @component('components.form_contato', ['classe' => 'borda-preta']) 
                      <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível!</p>

                      <p>Nosso tempo de resposta é de 48 horas!</p>
                    @endcomponent
                </div>
            </div>
{{-- rodape --}}
       @include('components.rodape') 

        </div>

     
@endsection