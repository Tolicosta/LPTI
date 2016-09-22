<?php

	 // PEGANDO OS DADOS DO FORMULÁRIO
	 $id = $_GET['id'];
	 $tipo = $_POST['tipo'];
	 $nome = $_POST['nome'];
	 $telefone = $_POST['telefone'];
	 $login = $_POST['login'];
	 $email = $_POST['email'];
	 $senha = $_POST['senha'];

if(empty($id))
	{
		$senha = array("nome" => "$nome", "telefone" => "$telefone", "login" => "$login", "senha" => "$senha", "email" => "$email", "tipo" => "$tipo");
	} else {
		$senha = array("id" => "$id", "nome" => "$nome", "telefone" => "$telefone", "login" => "$login", "senha" => "$senha", "email" => "$email", "tipo" => "$tipo");
};

$senha_string = json_encode($senha);

$ch = curl_init('http://localhost:8080/restmongo/rest/usuario/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $senha_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($senha_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);

if ($result === false) {
	print "<script> alert('ERRO!'); window.history.go(-1); </SCRIPT>\n";
} else {
	print "<script> alert('Registro inserido com sucesso.'); window.history.go(-1); </SCRIPT>\n";
};
	
curl_close($ch);
?>
