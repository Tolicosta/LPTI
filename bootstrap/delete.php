<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/restmongo/rest/$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
$result = curl_exec($ch);

if ($result === false) {
    print "<script> alert('ERRO! Não foi possível deletar o registro.'); window.history.go(-1); </SCRIPT>\n";
} else {
    print "<script> alert('Registro deletado com sucesso.'); window.history.go(-1); </SCRIPT>\n";
};

curl_close($ch);
?>

?>
