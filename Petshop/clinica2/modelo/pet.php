<?php

class Pet{
    private $codigo;
    private $nome;
    private $tipo;
    private $idade;

    function __construct(){
       
    }
    public function setCodigo($valor){
        $this->codigo = $valor;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setNome($valor){
        $this->nome = $valor;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setTipo($valor){
        $this->tipo = $valor;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setIdade($valor){
        $this->idade = $valor;
    }
    public function getIdade(){
        return $this->idade;
    }
}




?>