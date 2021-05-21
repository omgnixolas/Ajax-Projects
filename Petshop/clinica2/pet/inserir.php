<?php
    require_once("../DAO/PetDAO.php");
    require_once("../modelo/Pet.php");
    $retorno = "";
    
    if(!empty($_POST["nome"]) && !empty($_POST["tipo"]) && !empty($_POST["idade"])){
       $pet = new Pet();
       $pet->setNome($_POST["nome"]);
       $pet->setTipo($_POST["tipo"]);
       $pet->setIdade($_POST["idade"]);

       $petDAO = new PetDAO();
       if($petDAO->inserir($pet) == "Inseriu"){
           $retorno .= "Pet inserido com sucesso!";
           $retorno .= "<hr>";
       } else {
        $retorno .= "Erro ao inserir pet!";
        $retorno .= "<hr>";
       } 
    } else {
        $retorno .= "Campos vazios!";
        $retorno .= "<hr>";
    }
    echo $retorno;

?>