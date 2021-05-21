<?php
	//requires necessários
	require_once "../modelo/Veiculo.php";
	require_once "../DAO/VeiculoDAO.php";
	//variável para retornar os resultados
	$retorno = "";
	if(!empty($_POST["codigo_veic"])){
		//seta o update na instancia $veiculo
		$veiculo = new Veiculo();
		$veiculo->setCodigo($_POST["codigo_veic"]);
		$veiculo->setProprietario($_POST["proprietario"]);
		$veiculo->setMarca($_POST["marca"]);
		$veiculo->setModelo($_POST["modelo"]);
		$veiculo->setCor($_POST["cor"]);
		$veiculo->setVendido($_POST["vendido"]);

		$veiculoDAO = new VeiculoDAO();
		//atualiza o veiculo e todas as informações
		if($veiculoDAO->atualizar($veiculo) == "Atualizou"){
			$retorno .= "Veículo alterado com sucesso!";
			$retorno .= "<hr>";
		} else {
			$retorno .= "Erro ao atualizar o Veículo";
			$retorno .= "<hr>";
		}
} else {
	$retorno .= "Código em branco, verifique!" . $_POST["codigo_veic"];
	$retorno .= "<hr>";
}
	//retorno.
	echo $retorno;
?>