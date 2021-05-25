<?php

    namespace App;
    use App\Controller\CadastroController;
    use App\Controller\PrincipalController;
    use App\Controller\CadastroCapaController;

    class Routes{
        
        /**
         * Array das rotas da aplicação
         * @var Array String
         */
        private $rotas;
        
        public function __construct(){

            //ARRAY PARA LINKAR AS ROTAS COM OS RESPECTIVOS CONTROLADORES
            $this->rotas = [
                '/principal' => PrincipalController::class,
                '/cadastro' => CadastroController::class,
                '/cadastro-capa' => CadastroCapaController::class
            ];
        }

        /**
         * Este método tem o objetivo de identificar qual rota o usuário solicitou
         * e instanciar o controlador da rota desejada
         * @param String       $rota - rota recebida pela página index.php
         */
        public function getRota($rota){

            //USA O PATH COMO ÍNDICE NO ARRAY DE ROTAS
            //PARA RETORNAR O CONTROLADOR DA RESPECTIVA ROTA
            $classe = $this->rotas[$rota];
            $controller = new $classe();
            $controller->processaRota();
      }
    }
    