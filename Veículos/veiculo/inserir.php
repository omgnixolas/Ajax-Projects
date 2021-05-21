<?php
	//requires necessários.
    require_once ("../modelo/Veiculo.php");
    require_once ("../DAO/VeiculoDAO.php");
    //retorno.
	$retorno = "";
	//realiza a verificação de campos vazios antes de setar os valores
    if( !empty($_POST["proprietario"]) &&  !empty($_POST["modelo"]) &&  !empty($_POST["marca"]) &&  !empty($_POST["cor"]) && !empty($_POST["vendido"])){
		//instancia um novo veículo
        $veiculo = new Veiculo();
		//seta os valores no objeto veiculo
        $veiculo->setProprietario($_POST["proprietario"]);
        $veiculo->setModelo($_POST["modelo"]);
        $veiculo->setMarca($_POST["marca"]);
        $veiculo->setCor($_POST["cor"]);
        $veiculo->setVendido($_POST["vendido"]);
		//instancia um novo objeto dao
        $veiculoDAO = new VeiculoDAO();
		//chama o método inserir para o objeto $veiculo
        if($veiculoDAO->inserir($veiculo) == "Inseriu"){
            $retorno .= "Veículo inserido!";
            $retorno .= "<hr>";
        } else {
            $retorno .= "Erro ao inserir";
            $retorno .= "<hr>";
        }
    } else{
            $retorno .= "Existem campos vazios!";
            $retorno .= "<hr>";
            
    }
	//retorno
    echo $retorno;
 
    
   
  
    
?>