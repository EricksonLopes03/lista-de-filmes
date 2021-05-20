<?php

    namespace App;
    use App\Controller\CadastroController;
    use App\Controller\PrincipalController;

    class Routes{
        
        /**
         * Array das rotas da aplicação
         * @var Array: string
         */
        private $rotas;
        
        public function __construct(){
            $this->rotas = [
                '/principal' => PrincipalController::class,
                '/cadastro' => CadastroController::class
            ];
        }

        /**
         * @param mixed $rota recebida pela página index.php
         * 
         * Este método tem o objetivo de identificar qual rota o usuário solicitou
         * e instanciar o controlador da rota desejada
         */
        public function getRota($rota){
            $classe = $this->rotas[$rota];
            $controller = new $classe();
            $controller->processaRota();
      }
    }
    