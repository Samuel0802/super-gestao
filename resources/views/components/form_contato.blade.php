
{{--$slot =  Renderizar conteudo html que estava formulario dentro do components  --}}
{{$slot}}

<form action="{{ route('site.contato') }}" method="post">
    @csrf

    <input type="text" placeholder="Nome" value="{{old('nome') }}" name="nome" class="{{$classe}}">
    <br>
    <input type="text" placeholder="Telefone" value="{{old('telefone') }}"   name="telefone" class="{{$classe}}">
    <br>
    <input type="text" placeholder="E-mail" value="{{old('email') }}" name="email" class="{{$classe}}">
    <br>
    <select class="{{$classe}}" name="motivo">
        <option value="">Qual o motivo do contato?</option>
        <option value="duvida">Dúvida</option>
        <option value="elogio">Elogio</option>
        <option value="reclamacao">Reclamação</option>
    </select>
    <br>
    <textarea name="descricao"  class="{{$classe}}">{{ (old('descricao') != '') ? old('descricao') : 'Preencha aqui sua mensagem'}}

    </textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
