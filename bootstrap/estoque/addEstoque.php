<?php

	 // PEGANDO OS DADOS DO FORMULÁRIO
	 $tipo = $_POST['tipo'];
	 $produto = $_POST['produto'];
	 $assistido = $_POST['assistido'];
	 $doador = $_POST['doador'];
	 $quantidade = $_POST['quantidade'];
	 $data = $_POST['data'];

if(empty($id))
	{
		$data = array("produto" => "$produto", "assistido" => "$assistido", "doador" => "$doador", "data" => "$data", "quantidade" => "$quantidade", "tipo" => "$tipo");
	} else {
		$data = array("id" => "$id", "produto" => "$produto", "assistido" => "$assistido", "doador" => "$doador", "data" => "$data", "quantidade" => "$quantidade", "tipo" => "$tipo");
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
	print "<script> alert('Registro inserido com sucesso.'); window.history.go(-1); </SCRIPT>\n";
};
	
curl_close($ch);
?>
