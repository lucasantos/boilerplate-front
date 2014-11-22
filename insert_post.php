<?php
	include 'conexao.php';

	$title = $_POST["title"];
	$descricao = $_POST["descricao"];
	$conteudo = $_POST["conteudo"];

	if("empty($title)") and if("empty($descricao)") and if("empty($conteudo)"){
		header( Location : new_post.php?$msgErr=Campo vazio )
	}else {

	}

	function inserirPost($conexao, $title, $descricao, $conteudo) {
		$query = "INSERT INTO posts (titulo,descricao,conteudo) values ('{$title}','{$descricao}','{$conteudo}')";
		$resultado=mysqli_query($conexao, $query);

	}

	$resultado = inserirPost($title, $descricao, $conteudo);

	if(isset($resultado)) {
		echo "Sucesso";
	}else {
		echo "Erro";
	};


	/*Pegando os valores do post*/
	/*echo $title;
	echo '<br>';
	echo $descricao;
	echo '<br>';
	echo $conteudo;*/