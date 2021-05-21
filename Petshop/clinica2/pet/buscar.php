<?php
	require_once "../DAO/PetDAO.php";
	$retorno;
	if(!empty($_GET["codigo"])){
		$petDAO = new PetDAO();
		$pet = $petDAO->buscar($_GET["codigo"]);
		$retorno = json_encode($pet);
	} else {
		$retorno .= "Digite um código válido";
		$retorno .= "<hr>";
	}
	echo $retorno;
?>