<?php
class Conexao{
    private $conexao;
    function __construct(){
        $host = "localhost";
        $user = "root";
        $pwd = "";
        $bd = "projeto";
        try{
            $this->setConexao(new PDO("mysql:host={$host};dbname={$bd}",$user,$pwd, array(PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")));
            $this->getConexao()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            echo "<p>Erro em PDO: {$ex->getMessage()}</p>";
        }catch(Exception $ex){
            echo "<p>Erro geral do sistema: {$ex->getMessage()}</p>";
        }
    }
    function fecharConexao(){
        $this->conexao = NULL;
    }
    function getConexao(){ // Retorna conexão ativa
       return $this->conexao;
    }
    function setConexao($data){ // Define a conexão
        $this->conexao = $data;
    }
}
?>
