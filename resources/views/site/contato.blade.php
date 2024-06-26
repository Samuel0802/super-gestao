@extends('site.home')

{{-- Título dinâmico --}}
@section('titulo', 'Contato (teste)')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                {{-- Component visualizar mesmo formulário e demais view --}}
                @component('components.form_contato', ['classe' => 'borda-preta', 'motivo_contatos' => $motivo_contatos])
                    {{-- Parâmetros de classe do CSS --}}
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível!</p>
                    <p>Nosso tempo de resposta é de 48 horas!</p>
                @endcomponent
            </div>
        </div>

        {{-- Rodapé --}}
        @include('components.rodape')
    </div>
@endsection
