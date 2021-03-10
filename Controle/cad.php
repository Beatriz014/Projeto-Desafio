<?php
require_once("usuarioControle.php");
try{
    $usuario = new Usuario();
    $usuario->setUser($_POST['user']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha(md5(($_POST['senha'])));
    $usuario->setSexo($_POST['sexo']);
   
        $control = new UsuarioControle();
        if($control->inserir($usuario)){
            header("Location: ../Visual/login.php");
    }   

    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }


?>
