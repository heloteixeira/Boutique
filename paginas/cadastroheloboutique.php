<?php
	session_start();
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "heloboutique";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	if(!$conexao){ 
		echo "ERRO";
	}else{
		$nomecadastro = $_POST["nomecomp"];
		$emailcadastro = $_POST["email"];
		$senhacadastro = $_POST["senha"];
		$senhahash = password_hash($senhacadastro, PASSWORD_DEFAULT);
	
		$sql = "insert into cadastros (nome,email,senha) values
		('$nomecadastro', '$emailcadastro', '$senhahash')";

		if (mysqli_query($conexao, $sql)) {
        	echo "Cadastro feito com sucesso";
			$_SESSION["login"] = 'cliente';
    	} else {
        	echo "Erro ao cadastrar";
    	}
		mysqli_close($conexao);
	}	
?>