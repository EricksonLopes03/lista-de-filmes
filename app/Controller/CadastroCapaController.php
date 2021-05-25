<?php 

    namespace App\Controller;

    use App\Persistence\FilmePersistence;
    

    class CadastroCapaController implements InterfaceController{


        public function __construct(){
            
        }

        /**
         * Método responsável por exibir a view da rota solicitada
         */
        public function processaRota(){
                require __DIR__ . '/../View/cadastro-capa.php';
                $filmePersistence = new FilmePersistence();
                switch ($_GET['acao']) {
                    //SALVA OU ATUALIZA UMA IMAGEM
                    case 'salvar':
                        session_start();
                        $nomeImagem = $this->salvarImagem($_FILES['capa']);
                        $filmePersistence->salvarImagem($_SESSION['id'], $nomeImagem);
                        break;
                    
                    default:

                        break;
                }
            
        }

        /**
         * Método responsável por salvar / atualizar o nome de uma imagem no banco
         * @param  Array      $dadosImagem - dados da imagem recebida via $_POST
         * @return String
         */
        public function salvarImagem($dadosImagem){
            $nomeImagem = $dadosImagem['name']; 
            move_uploaded_file($dadosImagem['tmp_name'], __DIR__ . '/../../public/img/' . $nomeImagem);
            return $nomeImagem;
        }



    }

    