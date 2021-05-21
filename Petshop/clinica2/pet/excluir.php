<?php
    require_once "../DAO/PetDAO.php";

    $retorno = "";
    if(!empty($_GET["codigo"])){
        $petDAO = new PetDAO();

        if($petDAO->deletar($_GET["codigo"]) == "Excluiu"){
            $retorno .= "Deletado com sucesso" . $_GET["codigo"];
            $retorno .= "<hr>";
        } else {
            $retorno .= "Erro na exclusão do pet";
            $retorno .= "<hr>";
        }
    }
    echo $retorno;
?>