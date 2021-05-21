<?php
    //requires necessários
	require_once (dirname(__FILE__).'/../DBConexao.php');
    require_once ("../modelo/Veiculo.php");
    require_once ("../DAO/VeiculoDAO.php");
	//classe veiculoDAO
    class VeiculoDAO{
        private static $conexao;

        public function __construct(){
			//VERIFICA A CONEXÃO
            self::$conexao = DBConexao::getInstancia();
        }
		//método de inserção
        public function inserir(Veiculo $veiculo){
            $query = self::$conexao->prepare("insert into veiculo (proprietario,modelo,marca,cor,vendido) values(?,?,?,?,?)");
            $query->bindValue(1, $veiculo->getProprietario());
            $query->bindValue(2, $veiculo->getModelo());
            $query->bindValue(3, $veiculo->getMarca());
            $query->bindValue(4, $veiculo->getCor());
            $query->bindValue(5, $veiculo->getVendido());
            if($query->execute()){
                return "Inseriu";
            } else {
                return "Não inseriu";
            }
        }
		//método de busca
        public function buscar($codigo){
            $query = self::$conexao->prepare("select codigo, proprietario, modelo, marca, cor, vendido from veiculo where codigo = ?");
            $query->bindValue(1, $codigo);
            $query->execute();
            return $query->fetch();
        }
		//método de atualização
        public function atualizar(Veiculo $veiculo){
            $query = self::$conexao->prepare("Update veiculo set proprietario = ?, modelo = ?, marca = ?, cor = ?, vendido = ? where codigo = ?");
            $query->bindValue(1, $veiculo->getProprietario());
            $query->bindValue(2, $veiculo->getModelo());
            $query->bindValue(3, $veiculo->getMarca());
            $query->bindValue(4, $veiculo->getCor());
            $query->bindValue(5, $veiculo->getVendido());
            $query->bindValue(6, $veiculo->getCodigo());
            if($query->execute()){
                return "Atualizou";
            } else {
                return "Não atualizou";
            }
        }
		//método de deleção
        public function deletar($codigo){
            $query = self::$conexao->prepare("delete from veiculo where codigo = ?");
            $query->bindValue(1, $codigo);
            if($query->execute()){
                return "Excluiu";
            } else {
                return "Não excluiu";
            }
        }
		//método de listar
        public function listar(){
            $query = self::$conexao->prepare("select codigo, proprietario, modelo, marca, cor, vendido from veiculo order by codigo");
            $query->execute();
            return $query->fetchAll();
        }
    }
?>