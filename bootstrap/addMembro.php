<?php

	 // PEGANDO OS DADOS DO FORMULÁRIO
	 $id = $_GET['id'];
	 $tipo = $_POST['tipo'];
	 $nome = $_POST['nome'];
	 $telefone = $_POST['telefone'];
	 $endereco = $_POST['endereco'];
	 $email = $_POST['email'];
	 $qtdMembros = $_POST['qtdMembros'];

if(empty($id))
	{
		$qtdMembros = array("nome" => "$nome", "telefone" => "$telefone", "endereco" => "$endereco", "qtdMembros" => "$qtdMembros", "email" => "$email", "tipo" => "$tipo");
	} else {
		$qtdMembros = array("id" => "$id", "nome" => "$nome", "telefone" => "$telefone", "endereco" => "$endereco", "qtdMembros" => "$qtdMembros", "email" => "$email", "tipo" => "$tipo");
};

$qtdMembros_string = json_encode($qtdMembros);

$ch = curl_init('http://localhost:8080/restmongo/rest/membro/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $qtdMembros_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($qtdMembros_string))
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
