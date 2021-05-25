<?php
    namespace App;

    class Connection {

        /**
         * Método estático responsável por criar e retornar uma conexão com o banco
         * de dados utilizando PDO
         * @return PDO    $conn
         */
        public static function getConexao() {
            try {

                $conn = new \PDO(
                    "mysql:host=localhost;dbname=lista_de_filmes;charset=utf8",
                    "root",
                    "password" 
                );

                return $conn;

            } catch (\PDOException $e) {
                echo "erro: " . $e->getMessage();
            }
        }

        
    }

