<?php
	session_start();

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "heloboutique";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	if(!$conexao){
		echo"ERRO";
	}else{
		$emaillogin = $_POST["email"];
		$senhalogin = $_POST["senha"];
		$sql = "select email, senha from cadastros where email = '$emaillogin'";
		$resultado = mysqli_query($conexao, $sql);

		if (mysqli_num_rows($resultado) > 0) {
			$linha = mysqli_fetch_assoc($resultado);
			$senha_banco = $linha['senha'];
			if ($senhalogin==$senha_banco){
				$_SESSION["login"] = $emaillogin;
				echo"bem vindo de volta";
			}else{
				echo"Senha incorreta!";
			}
		}else{
			echo"Não há cadastro com esse e-mail!";		
		}		
		mysqli_close($conexao);
	}
?>