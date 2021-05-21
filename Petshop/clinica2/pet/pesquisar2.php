<?php
    require_once("../DAO/PetDAO.php");
    require_once("../modelo/Pet.php");
    $retorno = "";
    if(!empty($_GET["codigo"])){
        $petDAO = new PetDAO();
        $lista = $petDAO->buscar($_GET["codigo"]);

        if(!empty($lista)){
           $retorno .= "<table>";
           $retorno .= "<tr>";
           $retorno .= "<td>Código:</td>";
           $retorno .= "<td>Nome:</td>";
           $retorno .= "<td>Tipo:</td>";
           $retorno .= "<td>Idade:</td>";
           $retorno .= "<td>Opção:</td>";
           $retorno .= "</tr>";
           $retorno .= "<tr>";
           $retorno .= "<td>". $_GET["codigo"]."</td>";
           $retorno .= "<td id='tdnome'>".$lista["nome"]."</td>";
           $retorno .= "<td>".$lista["tipo"]."</td>";
           $retorno .= "<td>".$lista["idade"]."</td>";
           $retorno .= "<td>";
           $retorno .= "<a href='#' title='Excluir' onclick='deletarPet()'>Excluir</a>";
           $retorno .= "</td>";
		   $retorno .= "<td>";
		   $retorno .= "<a href='#' title='Editar' onclick='buscarPet()'>Editar</a>";
		   $retorno .= "</td>";
           $retorno .= "</tr>";
           $retorno .= "</table>";

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