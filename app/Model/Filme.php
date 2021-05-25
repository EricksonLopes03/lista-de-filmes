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
         * @var String
         */
        private $titulo;

        /**
         * Descrição do filme
         * @var String
         */
        private $descricao;

        /**
         * Gênero do filme
         * @var String
         */
        private $genero;

        /**
         * Ano de lançamento do filme
         * @var String
         */
        private $ano;

        /**
         * Nome gerado para a imagem de capa do filme
         * @var String
         */
        private $capa;


        public function __get($name){
            return $this->$name;
        }

        public function __set($name, $value){
            $this->$name = $value;
        }

        /**
         * Método responsável por validar os dados do formulário
         * @return boolean
         */
        public function validarDados(){
            $filtros = [
                'titulo' => FILTER_SANITIZE_STRIPPED,
                'descricao' => FILTER_SANITIZE_STRIPPED,
                'genero' => FILTER_SANITIZE_STRIPPED,
                'ano' => FILTER_VALIDATE_INT
            ];

            $dadosFiltrados = filter_input_array(INPUT_POST, $filtros);
            if($dadosFiltrados['titulo'] == ''){
                return false;
            }

            $this->__set('titulo', $dadosFiltrados['titulo']);
            $this->__set('descricao', $dadosFiltrados['descricao']);
            $this->__set('genero', $dadosFiltrados['genero']);
            $this->__set('ano', $dadosFiltrados['ano']);
            return true;

        }

    }