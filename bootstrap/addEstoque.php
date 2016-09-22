<?php

	 // PEGANDO OS DADOS DO FORMULÁRIO
	 $id = $_GET['id'];
	 $tipo = $_POST['tipo'];
	 $produto = $_POST['produto'];
	 $assistido = $_POST['assistido'];
	 $doador = $_POST['doador'];
	 $quantidade = $_POST['quantidade'];
	 $data = $_POST['data'];
     $usuario = $_POST['usuario'];

	//PEGANDO O PRODUTO PARA SABER A QUANTIDADE
	$url = "http://localhost:8080/restmongo/rest/produto/procurarNome/$produto";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
	$verificaProduto = json_decode($data);
	$verificaQuantidade = isset($verificaProduto->quantidade);
	$verificaID = isset($verificaProduto->id);

if ($tipo == 1 && ($quantidade > $verificaQuantidade)) {
	print "<script> alert('ERRO! Quantidade indisponível.'); window.history.go(-1); </SCRIPT>\n";
	exit;
};

if ($tipo == 2) {
	$qtd = $verificaQuantidade + $quantidade;
	$date = array("_id" => "$verificaID", "nome" => "$produto", "quantidade" => "$qtd");
	$date_string = json_encode($date);
	$ch = curl_init('http://localhost:8080/restmongo/rest/produto/');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $date_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($date_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$result = curl_exec($ch);
	
curl_close($ch);

};

if(empty($id))
	{
		$data = array("produto" => "$produto", "assistido" => "$assistido", "doador" => "$doador", "data" => "$data", "quantidade" => "$quantidade", "tipo" => "$tipo", "usuario" => "$usuario");
	} else {
		$data = array("id" => "$id", "produto" => "$produto", "assistido" => "$assistido", "doador" => "$doador", "data" => "$data", "quantidade" => "$quantidade", "tipo" => "$tipo", "usuario" => "$usuario");
};

$data_string = json_encode($data);

$ch = curl_init('http://localhost:8080/restmongo/rest/estoque/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);

if ($result === false) {
	print "<script> alert('ERRO!'); window.history.go(-1); </SCRIPT>\n";
} else {
	print "<script> alert('Registro inserido com sucesso.'); </SCRIPT>\n";
};
	
curl_close($ch);
?>
