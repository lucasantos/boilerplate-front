<?php
	include 'conexao.php';
	include 'banco-usuario.php';

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$resultado = buscaUsuario($conexao, $email, $senha);

	if($resultado) {
		echo "Logado";
	}else {
		echo "E-mail ou senha inválidos";
	};