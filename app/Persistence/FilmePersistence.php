<?php

    namespace App\Persistence;

    class FilmePersistence extends Crud{


        /**
         * Método responsável por cadastrar um novo Filme no banco
         * @param Object Filme     $filme - dados do filme a ser cadastrado
         * @return int             
         */
        public function salvar($filme){
            $query = 'insert into filme (id, titulo, descricao, genero, ano) values (default, :titulo, :descricao, :genero, :ano)';
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':titulo', $filme->__get('titulo'));
            $stmt->bindValue(':descricao', $filme->__get('descricao'));
            $stmt->bindValue(':genero', $filme->__get('genero'));
            $stmt->bindValue(':ano', $filme->__get('ano'));
            $stmt->execute();
            return $this->conn->lastInsertId();

        }

        /**
         * Método responsável por salvar ou atualizar o nome de uma imagem no banco
         * @param int          $id - identificador do filme que vai ser associado à imagem
         * @param String       $nomeImagem - nome da imagem a ser salva no banco de dados
         */
        public function salvarImagem($id, $nomeImagem){
            $query = 'update filme set nome_imagem_capa = :capa where id = :id';
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':capa', $nomeImagem);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

        }


        /**
         * Método responsável por atualizar os dados um objeto do tipo Filme no banco
         * @param int                    $id - identificador do filme escolhido para ser atualizado
         * @param Object Filme           $filme - dados do filme escolhido para ser atualizado
         */
        public function atualizar($id, $filme){
            $query = 'update filme set titulo = :titulo, descricao = :descricao, genero = :genero, ano = :ano where id = :id';
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':titulo', $filme->__get('titulo'));
            $stmt->bindValue(':descricao', $filme->__get('descricao'));
            $stmt->bindValue(':genero', $filme->__get('genero'));
            $stmt->bindValue(':ano', $filme->__get('ano'));
            $stmt->bindValue(':id', $id);
            $stmt->execute();

        }


        /**
         * Método responsável por listar todos os objetos do tipo Filme cadastrados no banco
         */
        public function listar(){
            $query = 'select * from filme';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        }


        /**
         * Método responsável por excluir um objeto do tipo Filme no banco
         * @param int       $id - identificador da imagem escolhida para ser excluída
         */
        public function excluir($id){
            $query = 'delete from filme where id = :id';
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

        }
    }
 