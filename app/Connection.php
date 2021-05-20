<?php

    require __DIR__ . '/../../vendor/autoload.php';
    namespace App;

    class Connection {

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

