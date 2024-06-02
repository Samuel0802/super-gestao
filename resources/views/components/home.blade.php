<div class="conteudo-destaque">
        
    <div class="esquerda">
        <div class="informacoes">
            <h1>Sistema Super Gestão</h1>
            <p>Software para gestão empresarial ideal para sua empresa.<p>
            <div class="chamada">
                <img src="/img/check.png">
                <span class="texto-branco">Gestão completa e descomplicada</span>
            </div>
            <div class="chamada">
                <img src="img/check.png">
                <span class="texto-branco">Sua empresa na nuvem</span>
            </div>
        </div>

        <div class="video">
            <img src="img/player_video.jpg">
        </div>
    </div>

    <div class="direita">
        <div class="contato">
            <h1>Contato</h1>
            <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
          {{-- component  visualizar mesmo formulário e demais view--}}
          @component('components.form_contato', ['classe' => 'borda-branca']) 
       {{-- paramentos de classe do css --}}
          <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível!</p>

          <p>Nosso tempo de resposta é de 48 horas!</p>
        @endcomponent
        </div>
    </div>
</div>