<?php include __DIR__ . '/layout/header.php'; ?>

<h3>Cadastro da imagem de capa</h3>
<form action="/cadastro-capa?acao=salvar&id" method="post" enctype="multipart/form-data">

    <div class="form-group lista-filmes my-5 p-3">
        <label for="capa" class="mt-5">Selecione uma imagem de capa:</label>
        <input type="file" class="form-control-file" id="capa" name="capa">

    
        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-success" value=""><i class="fas fa-check icone"></i>Salvar Imagem</button>
        </div>

    </div>
</form>

<?php include __DIR__ . '/layout/footer.php'; ?>