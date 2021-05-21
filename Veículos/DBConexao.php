<?php
abstract class DBConexao {
	//Varíavel estática utilizada para verificar a conexão
    private static $instancia;
	//usuário do banco
    const USER = "root";
	//senha do banco
    const SENHA = "";
	//método de conexão com try catch
    public static function getInstancia(){
        try{
            if(self::$instancia == null){
				//banco de dados venda, localhost
                $stringConexao = "mysql:host=localhost;port=3306;dbname=venda";
				//PDO driver genérico para banco
                self::$instancia = new PDO($stringConexao, self::USER, self::SENHA);
				//gerenciamento de erros
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch(PDOException $erro){
                //echo $erro->getMessage();
                echo "Erro na conexão. Contate o técnico.";
        }
		//retorna si mesma.
        return self::$instancia;
    }
}
?>