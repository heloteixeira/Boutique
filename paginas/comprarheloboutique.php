<?php
	session_start();
	 if(!isset ($_SESSION['login'])){
		header ("location:aviso.html");
	 }
?>

<html>
	<head>
		<title>Comprando HeloBoutique</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../assets/cssheloboutique.css">
	</head>
	<body>
		<span>HeloBoutique</span>
		<form name="frm">
			<h3>Comprar</h3>
			<h4>Endereço</h3>
			<h5>Vila</h5><input type="text" name="vila">
			<br><br>
			<h5>Rua</h5><input type="text" name="rua">
			<br><br>
			<h5>Númeração</h5><input type="number" name="numeracao">
			<br><br>
			<h5>Complemento</h5><input type="textarea" name="complemento">
			<h4>Tipo de pagamento</h4>
			<input type="radio" name="pagamento" value="pix">pix
  			<input type="radio" name="pagamento" value="credito">crédito
			<input type="radio" name="pagamento" value="débito">débito
			<input type="radio" name="pagamento" value="boleto">boleto bancário
			<br><br>
			<input type="submit" value="COMPRAR">
		</form>
		
	</body>
</html>