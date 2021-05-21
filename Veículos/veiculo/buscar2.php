<?php
	 //requires necessários
    require_once ("../modelo/Veiculo.php");
    require_once ("../DAO/VeiculoDAO.php");
	//variavel de retorno
    $retorno = "";
	//se o get código não for vazio
    if(!empty($_GET["codigo"])){
		//instancia um novo veículoDAO
        $veiculoDAO = new VeiculoDAO();
		//chama o método buscar()
        $veiculo = $veiculoDAO->buscar($_GET["codigo"]);
		//se o veículo buscado for diferente de vazio exibe os campos do banco
        if(!empty($veiculo)){
            $retorno .= "Proprietário " . $veiculo['proprietario'] . "<br>";
            $retorno .= "Modelo " . $veiculo['modelo'] . "<br>";
            $retorno .= "Marca " . $veiculo['marca'] . "<br>";
            $retorno .= "Cor " . $veiculo['cor'] . "<br>";
            $retorno .= "Vendido " . $veiculo['vendido'] . "<br>";
            $retorno .= "<hr>";
        } else {
            $retorno .= "<p> Veículo não encontrado! </p>";
            $retorno .= "<hr>";
        }
    } else {
        $retorno .= "<p> Código não pode ser vazio </p>";
        $retorno .= "<hr>";
    }
	//retorno.
    echo $retorno;

?>