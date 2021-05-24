<?php include __DIR__ . '/layout/header.php'; ?>

<div class="row d-flex justify-content-end my-5">
    <a class="btn btn-primary" href="/principal"><i class="fas fa-undo-alt icone"></i>Voltar para a lista de filmes</a>

</div>

<h3>Cadastro dos dados</h3>
<form action="/cadastro?acao=salvar" method="post">

    <div class="form-group my-5 p-3 lista-filmes">

        <label for="titulo" class="mt-5">Título:</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="ex: Interestelar">

        <label for="descricao" class="mt-5 strong">Descrição:</label>
        <textarea class="form-control" rows="5" name="descricao" id="descricao" placeholder="ex: As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar."></textarea>

        <div class="mt-5">
            <label for="genero">Gênero: </label>
            <select name="genero" id="genero">
                <option value="0">Selecione um gênero</option>
                <option value="Terror">Terror</option>
                <option value="Ação">Ação</option>
            </select>
        </div>

        <label for="ano" class="mt-5">Ano de Lançamento:</label>
        <input type="number" class="form-control" placeholder="ex: 2014" name="ano" id="ano" style="width: 120px;">

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-success" value=""><i class="fas fa-check icone"></i>Salvar Filme</button>
        </div>

    </div>
</form>

<?php include __DIR__ . '/layout/footer.php'; ?>