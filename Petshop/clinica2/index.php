<?php

?>

<!DOCTYPE html>
<html>  
    <head>  
        <title> Requisição ajax </title>
    </head>
    <body>
        <h1>Com AJAX </h1>
        <h2> Buscar pet </h2>
        <div id="divBuscar">
            <form action="#" method="POST">
                <div id="lable_codigo">Digite o código do pet:</div>
                <input name="codigo_pet" id="codigo_pet" type="text">
                <!--<input value="Buscar" name="buscar" type="submit">-->
                <input type="button" value="Buscar" onclick="getPetCodigo()">
            </form>
        </div>
        <hr>
        <h2> Cadastrar pet </h2>
        
        <form action="#" id="frm_pet">
            <div id="lable_codigo">Código:</div>
            <input type="text" name="codigo" id="codigo" readonly>
            <div id="lable_nome">Nome:</div>
            <input type="text" id="nome" name="nome">
            <div id="lable_tipo">Tipo:</div>
            <input type="text" id="tipo" name="tipo">
            <div id="lable_idade">Idade:</div>
            <input type="number" id="idade" name="idade">
            <input type="button" value="Cadastrar" onclick="inserirPet()">
			<input type="button" value="Atualizar" onclick="atualizarPet()">
        </form>
        <hr>
        <h2>RESULTADO</h2>
        <div id="resultado">
         <?php
              
            ?>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
    </body>
</html>