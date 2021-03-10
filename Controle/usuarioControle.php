<?php
require_once("Conect.php");
require_once("../Modelo/usuario.php");
    class UsuarioControle{
        function remover($id){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM usuario WHERE id=:id");
                $cmd->bindParam("id", $id);
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro de PDO: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        function selecionarTodos(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        function inserir($usuario){
            try{
                $conexao = new Conexao();
                $user = $usuario->getUser();
                $email = $usuario->getEmail();
                $sexo = $usuario->getSexo();
                $senha = $usuario->getSenha();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO usuario(user,sexo,email,senha) VALUES(:u,:se,:e,:s);");
                $cmd->bindParam("u", $user);
                $cmd->bindParam("se",$sexo);
                $cmd->bindParam("e", $email);
                $cmd->bindParam("s", $senha);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
    function login($model){
             try{
                $conexao = new Conexao();
                $user = $model->getUser();
                $senha = $model->getSenha();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario WHERE user = :n AND senha = :s;");
                $cmd->bindParam("n",$user);
                $cmd->bindParam("s",$senha);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS,"Usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        
        }
   
    
}
?>
