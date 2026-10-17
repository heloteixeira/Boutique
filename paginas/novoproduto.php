<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "heloboutique";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	if(!$conexao){ 
		echo "ERRO";
	}else{
		$tipo = $_POST["tipop"];
		$titulo = $_POST["titulop"];
		$descricao = $_POST["descp"];
		$preco = $_POST["precop"];
		$foto = $_POST["fotop"];
	
		$sql = "insert into produtos (titulo,preco,foto,descricao,tipo) values
		($titulo, $preco, $foto, $descricao, $tipo)";

		echo"Publicado com sucesso!";
		mysqli_close($conexao);
	}	
?>