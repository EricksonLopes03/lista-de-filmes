<?php 

    namespace App\Model;

    class Filme {


        /**
         * Identificador no banco de dados
         * @var int
         */
        private $id;

        /**
         * Títuo do filme
         * @var string
         */
        private $titulo;

        /**
         * Descrição do filme
         * @var string
         */
        private $descricao;

        /**
         * Gênero do filme
         * @var string
         */
        private $genero;

        /**
         * Ano de lançamento do filme
         * @var int
         */
        private $ano;

        /**
         * Nome gerado para a imagem de capa do filme
         * @var string
         */
        private $capa;


        public function __get($name){
            return $this->$name;
        }

        public function __set($name, $value){
            $this->$name = $value;
        }

    }