<?php 

    namespace App\Controller;

    use App\Persistence\FilmePersistence;
    use App\Model\Filme;

    class CadastroController implements InterfaceController{

        public function __construct(){
            
        }

        /**
         * Método responsável por exibir a view da rota solicitada
         */
        public function processaRota(){
            if(!isset($_GET['acao'])){
                require __DIR__ . '/../View/cadastro.php';
            }else{
                $filmePersistence = new FilmePersistence();
                switch ($_GET['acao']) {
                    case 'salvar':
                        //TESTE PARA VERIFICAR SE IRÁ SALVAR UM NOVO REGISTRO OU ATUALIZAR UM REGISTRO EXISTENTE

                        $filme = new Filme();
                        if($_GET['id'] != ''){
                            echo 'ATUALIZAR REGISTRO';
                            $filme->validarDados();
                            $filmePersistence->atualizar($_GET['id'], $filme);
                            session_start();
                            $_SESSION['id'] = $_GET['id'];
                            header('Location: cadastro-capa?id='. $_SESSION['id']);
                        }else{
                            if(!$filme->validarDados()){
                                require __DIR__ . '/../View/cadastro.php';
                            }
                            $id = $filmePersistence->salvar($filme);
                            session_start();                       
                            $_SESSION['id'] = $id;
                            header('Location: cadastro-capa?id='. $id);
                        }
                        break;
                    case 'atualizar':
                        require __DIR__ . '/../View/cadastro.php';
                        break;
                    case 'atualizarBanco':
                        echo 'ATUALIZAR BANCO';
                        break;
                    case 'excluir':
                        print_r($_GET);
                        if(isset($_GET['id'])){
                            $filmePersistence->excluir($_GET['id']);
                        }
                        header('Location: principal');
                        break;
                    
                    default:
                        # code...
                        break;
                }

            }
        }
    }

    