<?php
	$servidor	= 'localhost';  // ENDEREÇO DO SERVIDOR DO BD
	$usuario	= 'root';		// USUÁRIO DO BD
	$senha		= '';			//SENHA DO BD
	$bancoDados	= 'tcc';	//NOME DO BD
	
	$mysqli		= mysqli_connect($servidor, $usuario, $senha, $bancoDados);
	if(mysqli_connect_error())
	{
		die("error");
	}
	
	$sql = "SELECT EmailConfirmado
			from funcionario
			where funcionario.Login = " . "'" . $_GET["login"] . "'";
	
	$result = mysqli_query($mysqli, $sql); //EXECUTA O COMANDO NO BD

	
	while($linha = mysqli_fetch_object($result))
	{
		echo $linha -> EmailConfirmado; 
	}
	