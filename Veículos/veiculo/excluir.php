<?php
	//requires necessários
    require_once "../DAO/VeiculoDAO.php";
	//retorno.
    $retorno = "";
	//se o get código for diferente de vazio:
    if(!empty($_GET["codigo"])){
		//instancia novo objeto
        $veiculoDAO = new VeiculoDAO();
		//se o deletar for efetuado com sucesso retornará "Excluiu".
        if($veiculoDAO->deletar($_GET["codigo"]) == "Excluiu"){
            $retorno .= "Deletado com sucesso" . $_GET["codigo"];
            $retorno .= "<hr>";
        } else {
            $retorno .= "Erro na exclusão do veiculo";
            $retorno .= "<hr>";
        }
    }
	//retorno.
    echo $retorno;
?>