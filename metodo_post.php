<?php

$codigo= $_POST['cx'];
$oldPass=$_POST['old_psw'];
$newPass=$_POST['psw'];
$search= 'sPr';
$usermailenc=str_replace($search, '', $codigo);
$usermail=base64_decode($usermailenc);
// sql stuff
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc";
$autorizado=0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$newpassMD5 = hash ('md5' , $newPass);
$oldPassMD5 = hash ('md5' , $oldPass);

$verifica = "SELECT funcionario.senha FROM funcionario WHERE funcionario.Email = '$usermail';";
if($resultado = $conn->query($verifica)){
    $row = $resultado->fetch_assoc();
		if($oldPassMD5===$row["senha"])
		{
			$updateSenha = "UPDATE funcionario SET funcionario.Senha = '$newpassMD5', funcionario.EmailConfirmado = 1 WHERE funcionario.Email = '$usermail';";
			if ($conn->query($updateSenha) === TRUE) {
			echo "Senha Atualizada com sucesso;";
			$autorizado = 1;
		} else {
			echo "Erro ao atualizar Senha;" . $sql . "<br>" . $conn->error;
				}
} else {
		echo "Senha Atual Invalida;";
		}
}

