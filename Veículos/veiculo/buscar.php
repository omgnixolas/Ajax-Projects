<?php
	//requires necessários
    require_once ("../modelo/Veiculo.php");
    require_once ("../DAO/VeiculoDAO.php");
    $retorno = "";
	
	//se o código não for nulo busca pelo veículo
    if(!empty($_GET["codigo"])){
        $veiculoDAO = new VeiculoDAO();
        $veiculo = $veiculoDAO->buscar($_GET["codigo"]);
        if(!empty($veiculo)){
			//formato json no doc ajax.js
			$retorno = json_encode($veiculo);
        } else {
            $retorno .= "<p> Veículo não encontrado! </p>";
            $retorno .= "<hr>";
        }
    } else {
        $retorno .= "<p> Código não pode ser vazio </p>";
        $retorno .= "<hr>";
    }
    echo $retorno;
?>