<?php
    class Veiculo{
		//no banco de dados->codigo
        private $codigo;
		//no banco de dados->proprietario
        private $proprietario;
		//no banco de dados->modelo
        private $modelo;
		//no banco de dados->marca
        private $marca;
		//no banco de dados->cor
        private $cor;
		//no banco de dados->vendido
        private $vendido;

        function __construct(){
        }

		//get e set código
        public function setCodigo($valor){
            $this->codigo = $valor;
        }
        public function getCodigo(){
            return $this->codigo;
        }
		//get e set proprietario
        public function setProprietario($valor){
            $this->proprietario =  $valor;
        }
        public function getProprietario(){
            return $this->proprietario;
        }
		//get e set modelo
        public function setModelo($valor){
            $this->modelo =  $valor;
        }
        public function getModelo(){
            return $this->modelo;
        }
		//get e set marca
        public function setMarca($valor){
            $this->marca = $valor;
        }
        public function getMarca(){
            return $this->marca;
        }
		//get e set cor
        public function setCor($valor){
            $this->cor =  $valor;
        }
        public function getCor(){
            return $this->cor;
        }
		//get e set vendido
        public function setVendido($valor){
            $this->vendido =  $valor;
        }
        public function getVendido(){
            return $this->vendido;
        }
    }
?>