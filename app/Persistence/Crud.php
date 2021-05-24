<?php 
    namespace App\Persistence;

    use App\Connection;

    abstract class Crud{

        
            /**
             * Variável para conter uma conexão com o banco de dados
             * @var Connection
             */
            protected \PDO $conn;

            public function __construct(){
                $this->conn = Connection::getConexao();
            }
           

            /**
             * Método responsável por padronizar cadastro de dados no banco
             * @param mixed $objeto
             */
            protected function salvar($objeto){
                
            }


            /**
             * Método responsável por padronizar atualização de dados no banco
             * @param mixed $id
             * @param mixed $objeto
             */
            protected function atualizar($id, $objeto){

            }


            /**
             * Método responsável por padronizar a recupeção de uma lista de dados no banco
             */
            protected function listar(){

            }


            /**
             * Método responsável por padronizar exclusão de dados no banco
             * @param mixed $id
             */
            protected function excluir($id){

            }
        }