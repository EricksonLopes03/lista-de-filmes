<?php include __DIR__ . '/layout/header.php'; ?>

<?php 

    switch ($_GET['retorno']) {
        case 'cadastrado':
            $classes = 'alert alert-success alert-dismissible fade show';
            $texto = 'Cadastro realizado com sucesso!';
            break;
        case 'excluido':
            $classes = 'alert alert-success alert-dismissible fade show';
            $texto = 'Cadastro excluido com sucesso!';
            break;
        case 'erroAcesso':
            $classes = 'alert alert-danger alert-dismissible fade show';
            $texto = 'Esta página não pode ser acessada diretamente!';
            break;
        
        default:
            # code...
            break;
    }

?>

<?php if(isset($_GET['retorno'])){ ?>

    <div class="<?=$classes?>" role="alert" id="feedback">
        <?=$texto?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>


<div class="row d-flex justify-content-end">
    <a class="btn btn-primary" href="/cadastro"><i class="fas fa-plus-circle icone"></i>Adicionar Filme</a>

</div>

<?php foreach ($filmes as $filme) { ?>

    <div class="row lista-filmes my-5 p-3">
        <div class="col-md-11">

            <h3> <strong> <?= $filme['titulo'] ?> </strong> </h3>

            <p> <?= $filme['descricao'] ?> </p>

            <p> <small> <strong> Gênero: </strong> <?= $filme['genero'] ?> </small></p>

            <p><small> <strong> Ano de Lançamento: </strong> <?= $filme['ano'] ?> </small></p>

        </div>
        <div class="col-md-1" style="display: grid;">

            <div>
                <a class="btn text-dark" href="/cadastro?acao=atualizar<?= '&id=' . $filme['id'] . '&titulo=' . $filme['titulo'] . '&descricao=' . $filme['descricao'] . '&genero=' . $filme['genero'] . '&ano=' . $filme['ano'] ?>">
                    <i class="far fa-edit text-center icone" title="Editar">
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