<?php
    require_once("../DAO/PetDAO.php");
    require_once("../modelo/Pet.php");
    $retorno = "";
    if(!empty($_GET["codigo"])){
        $petDAO = new PetDAO();
        $lista = $petDAO->buscar($_GET["codigo"]);

        if(!empty($lista)){
            $retorno .= "Código: " . $lista["codigo"] . "<br>";
            $retorno .= "Nome: " . $lista["nome"] . "<br>";
            $retorno .= "Tipo: " . $lista["tipo"] . "<br>";
            $retorno .= "Idade: " . $lista["idade"] . "<br>";
            $retorno .= "<hr>";
        } else {
            $retorno .= "Pet não encontrado!";
            $retorno .= "<hr>";
        }
    } else {
        $retorno .= "Digite um valor diferente de vazio! <br>";
        $retorno .= "<hr>";
    }
    echo $retorno;
?>