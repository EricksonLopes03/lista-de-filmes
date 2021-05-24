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
                        $filme = new Filme();
                        if(!$filme->validarDados()){
                            require __DIR__ . '/../View/cadastro.php';
                        }
                        $id = $filmePersistence->salvar($filme);
                        session_start();                       
                        $_SESSION['id'] = $id;
                        header('Location: cadastro-capa?id='. $id);
                        break;
                    case 'atualizar':
                        print_r($_POST);
                        break;
                    case 'listar':
                        print_r($_POST);
                        break;
                    case 'excluir':
                        print_r($_POST);
                        break;
                    
                    default:
                        # code...
                        break;
                }

            }
        }
    }

    