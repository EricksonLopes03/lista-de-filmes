<?php include __DIR__ . '/layout/header.php'; ?>
<div class="row d-flex justify-content-end">
   <a class="btn btn-primary" href="/cadastro"><i class="fas fa-plus-circle icone"></i>Adicionar Filme</a>

</div>

<?php foreach ($filmes as $filme) { ?>

    <div class="row lista-filmes my-5 p-3">
        <div class="col-md-11">

            <h3> <strong> <?= $filme['titulo']?> </strong> </h3>

            <p> <?= $filme['descricao']?> </p>

            <p> <small> <strong> <?= $filme['genero']?> </strong></small></p>

            <p><small> <strong> <?= $filme['ano']?> </strong></small></p>

        </div>
        <div class="col-md-1" style="display: grid;">

            <div>
                <a class="btn text-dark" href="/cadastro?acao=atualizar<?= '&id=' . $filme['id'] . '&titulo=' . $filme['titulo'] .'&descricao=' . $filme['descricao'] . '&genero=' . $filme['genero'] . '&ano=' . $filme['ano']?>" >
                    <i class="far fa-edit text-center icone"  title="Editar">
                    </i>
                </a>
            </div>
            

            <div>
                <a class="btn text-dark" href="<?= "/img//" . $filme['nome_imagem_capa'] ?>" target="_blank">
                <i class="fas fa-eye text-center icone" title="Visualizar capa"></i>
                </a>
            </div>

            <div>
                <a class="btn text-dark" href="/cadastro?acao=excluir&id=<?= $filme['id'] ?>">
                <i class="far fa-trash-alt icone" title="Excluir"></i>
                </a>
            </div>

        </div>

    </div>
<?php } ?>


<?php include __DIR__ . '/layout/footer.php'; ?>