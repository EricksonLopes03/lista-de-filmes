<?php include __DIR__ . '/layout/header.php'; ?>

<div class="row d-flex justify-content-end my-5">
   <a class="btn btn-primary" href="/principal"><i class="fas fa-undo-alt icone"></i>Voltar para a lista de filmes</a>

</div>

<h3>Cadastro da imagem de capa</h3>
<form action="/cadastro-capa?acao=salvar" method="post" enctype="multipart/form-data">

    <div class="form-group lista-filmes my-5 p-3">
        <label for="capa" class="mt-5">Selecione uma imagem de capa:</label>
        <input type="file" class="form-control-file" id="capa" name="capa">

    
        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-success" value=""><i class="fas fa-check icone"></i>Salvar Imagem</button>
        </div>

    </div>
</form>

<?php include __DIR__ . '/layout/footer.php'; ?>