<?php
	//requires necessários
    require_once("../DAO/VeiculoDAO.php");
    require_once("../modelo/Veiculo.php");
    //retorno.
	$retorno = "";
	//se o código do get não for vazio
    if(!empty($_GET["codigo"])){
		//instancia um veiculoDAO
        $veiculoDAO = new VeiculoDAO();
		//chama o método buscar e salva na variavel $lista
        $lista = $veiculoDAO->buscar($_GET["codigo"]);
		//parte visual, gera uma tabela com os valores retornados do método buscar()
        if(!empty($lista)){
           $retorno .= "<table>";
           $retorno .= "<tr>";
           $retorno .= "<td>Código:</td>";
           $retorno .= "<td>Proprietário:</td>";
           $retorno .= "<td>Modelo:</td>";
           $retorno .= "<td>Marca:</td>";
		   $retorno .= "<td>Cor:</td>";
		   $retorno .= "<td>Vendido:</td>";
           $retorno .= "<td>Opção:</td>";
           $retorno .= "</tr>";
           $retorno .= "<tr>";
           $retorno .= "<td>". $lista["codigo"] ."</td>";
           $retorno .= "<td id='tdnome'>".$lista["proprietario"]."</td>";
           $retorno .= "<td>".$lista["modelo"]."</td>";
           $retorno .= "<td>".$lista["marca"]."</td>";
		   $retorno .= "<td>".$lista["cor"]."</td>";
		   $retorno .= "<td>".$lista["vendido"]."</td>";
           $retorno .= "<td>";
           $retorno .= "<a href='#' title='Excluir' onclick='deletarVeiculo()'>Excluir</a>";
           $retorno .= "</td>";
		   $retorno .= "<td>";
		   $retorno .= "<a href='#' title='Editar' onclick='buscarVeiculo()'>Editar</a>";
		   $retorno .= "</td>";
           $retorno .= "</tr>";
           $retorno .= "</table>";
        } else {
            $retorno .= "Veículo não encontrado!";
            $retorno .= "<hr>";
        }
    } else {
        $retorno .= "Digite um valor diferente de vazio! burro " . $_GET["codigo"];
        $retorno .= "<hr>";
    }
	//retorno
    echo $retorno;
?>