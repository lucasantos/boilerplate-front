<?php
	$senhamd5 = md5($senha);
	function buscaUsuario($conexao, $email, $senha) {
		$query = "SELECT * FROM usuario WHERE email='{$email}' and senha='{$senhamd5}'";
		$resultado = mysqli_query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}