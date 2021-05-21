<?php
	require_once "../modelo/Pet.php";
	require_once "../DAO/PetDAO.php";
	
	$retorno = "";
	if(!empty($_POST["codigo"])){
		$pet = new Pet();
		$pet->setCodigo($_POST["codigo"]);
		$pet->setNome($_POST["nome"]);
		$pet->setTipo($_POST["tipo"]);
		$pet->setIdade($_POST["idade"]);
		
		$petDAO = new PetDAO();
		if($petDAO->atualizar($pet) == "Atualizou"){
			$retorno .= "Pet alterado com sucesso!";
			$retorno .= "<hr>";
		} else {
			$retorno .= "Erro ao atualizar o PET";
			$retorno .= "<hr>";
		}
} else {
	$retorno .= "Código em branco, verifique!";
	$retorno .= "<hr>";
}
	echo $retorno;
?>