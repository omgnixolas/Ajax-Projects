<?php

    require_once(dirname(__FILE__).'/../DBConexao.php');
    class PetDAO{
        private static $cnx;

        public function __construct(){
            self::$cnx = DBConexao::getInstancia();
        }
        public function inserir(Pet $pet){
            $query = self::$cnx->prepare("insert into pet (nome,tipo,idade) values(?,?,?)");
            $query->bindValue(1, $pet->getNome());
            $query->bindValue(2, $pet->getTipo());
            $query->bindValue(3, $pet->getIdade());
            if($query->execute()){
                return "Inseriu";
            } else {
                return "Não inseriu";
            }
        }
        public function atualizar(Pet $pet){
            $query = self::$cnx->prepare("Update pet set nome = ?, tipo = ?, idade = ? where codigo = ?");
            $query->bindValue(1, $pet->getNome());
            $query->bindValue(2, $pet->getTipo());
            $query->bindValue(3, $pet->getIdade());
            $query->bindValue(4, $pet->getCodigo());
            if($query->execute()){
                return "Atualizou";
            } else {
                return "Não atualizou";
            }
        }
        public function deletar($codigo){
            $query = self::$cnx->prepare("delete from pet where codigo = ?");
            $query->bindValue(1, $codigo);
            if($query->execute()){
                return "Excluiu";
            } else {
                return "Não excluiu";
            }
        }
        public function listar(){
            $query = self::$cnx->prepare("select codigo, nome, tipo, idade from pet order by codigo");
            $query->execute();
            return $query->fetchAll();
        }
        public function buscar($codigo){
            $query = self::$cnx->prepare("select codigo, nome, tipo, idade from pet where codigo = ?");
            $query->bindValue(1, $codigo);
            $query->execute();
            return $query->fetch();
        }
    }
?>