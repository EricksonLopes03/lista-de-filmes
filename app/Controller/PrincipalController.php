<?php 

    namespace App\Controller;

    use App\Persistence\FilmePersistence;
    use App\Model\Filme;

    class PrincipalController implements InterfaceController{

        public function __construct(){
            
        }

        /**
         * Método responsável por exibir a view da rota solicitada
         */
        public function processaRota(){

            require __DIR__ . '/../View/principal.php';
        }

    }