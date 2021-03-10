<?php
	session_start();
	require_once("usuarioControle.php");
	require_once("../Modelo/usuario.php");
	$user = new Usuario();
	$controle = new UsuarioControle();
	$user->setUser($_POST['user']);
	$user->setSenha(md5($_POST['senha']));
	if($controle->login($user)){
		$_SESSION['user'] = $user;
		$_SESSION['senha'] = $user;
		echo "<script>location.href='../Visual/desafio1.php';</script>";
	}else{
		echo "<script>alert('Usuario não cadastrado');location.href='../Visual/cadastro.php';</script>";
	}
?>

