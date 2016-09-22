<?php

//PEGANDO O REGISTRO
$id = isset($_GET['id']) ? $_GET['id'] : null;
$url = "http://localhost:8080/restmongo/rest/estoque/$id";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$estoque = json_decode($data);

//PEGANDO O NOME DOS PRODUTOS PARA LISTAGEM
$url = 'http://localhost:8080/restmongo/rest/produto/listarTudo';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$produto = json_decode($data);

//PEGANDO O NOME DOS ASSISTIDOS PARA LISTAGEM
$url = 'http://localhost:8080/restmongo/rest/membro/procurarTipo/1';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$assistido = json_decode($data);

//PEGANDO O NOME DOS DOADORES PARA LISTAGEM
$url = 'http://localhost:8080/restmongo/rest/membro/procurarTipo/2';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$doador = json_decode($data);

?>

<html>
	
	<head>
	
		<title>sdgljh</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/datepicker-pt-BR.js"></script>	
		<script type="text/javascript" src="js/monthly.js"></script>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/styleIndex.css" rel="stylesheet" type="text/css">
		<link href="css/cssIndex.css" rel="stylesheet" type="text/css">
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/meuscript.js"></script>
  </head>
  
  <body>
    <div class="section section-primary" id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <img src="imgs/logo.png" alt="logo" height="100px" width="120px">
          </div>
          <div class="col-md-10 text-center">
            <h1>SISTEMA DE ASSISTÊNCIA SOCIAL</h1>
            <p>Gerenciamento de Estoque, Membros, Eventos e Usuários</p>
          </div>
          <div class="col-md-1">
            <a href="perfil.php"><i class="fa fa-4x fa-fw fa-user text-inverse"></i></a>
            <h5 class="text-center">PERFIL</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container" id="painel">
        <div class="row">
          <div class="col-md-4 text-left">
            <div class="row">
              <div class="col-md-3 text-center">
                <a href="#"><i class="fa fa-4x fa-align-justify fa-fw text-primary"></i></a>
              </div>
              <div class="col-md-9" id="buttons">
                <a class="btn btn-block btn-default btn-lg" href="telaPrincipal.php">Tela Principal</a>
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-3 text-center">
                <a href="#"><i class="fa fa-4x fa-fw text-primary fa-dropbox"></i></a>
              </div>
              <div class="col-md-9" id="buttons">
                <a class="btn btn-block btn-default btn-lg" href="estoque/inserirEstoque.php">Inserir Doação/Arrecadação</a>
                <a class="btn btn-block btn-default btn-lg" href="estoque/listarDoacoes.php">Listar Doações<br></a>
                <a class="btn btn-block btn-default btn-lg" href="estoque/produto.php">Controle de Produtos<br></a>
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-3 text-center">
                <a href="#"><i class="fa fa-4x fa-child fa-fw text-primary"></i></a>
              </div>
              <div class="col-md-9" id="buttons">
                <a class="btn btn-block btn-default btn-lg" href="inserirUsuario.php">Inserir Usuario</a>
                <a class="btn btn-block btn-default btn-lg" href="inserirMembro.php">Inserir Membro<br></a>
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-3">
                <a href="telaPrincipal.php"><i class="fa fa-4x fa-dollar fa-fw text-primary"></i></a>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-12">
                    <a class="btn btn-block btn-default btn-lg" href="arrecadarDinheiro.php">Arrecadar Dinheiro</a>
                    <a class="btn btn-block btn-default btn-lg" href="retirarDinheiro.php">Retirar Dinheiro</a>
                    <a class="btn btn-block btn-default btn-lg" href="listarDinheiro.php">Listar Economias</a>
                  </div>
                </div>
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-3 text-center">
                <a href="#"><i class="fa fa-4x fa-fw text-primary fa-area-chart"></i></a>
              </div>
              <div class="col-md-9" id="buttons">
                <a class="btn btn-block btn-default btn-lg" href="arrecadacoes.php">Relatório de Entradas</a>
                <a class="btn btn-block btn-default btn-lg" href="doacoes.php">Relatório de Saídas<br></a>
              </div>
            </div>
          </div>
                  <div id="conteudo">
				<div class="row">
						
						<div class="col-md-4" id="formulario">
							
							<div class="row">
								
								<div class="col-md-12">
									
									<h1 class="text-center">INSERIR DOAÇÃO/ARRECADAÇÃO</h1>
									<br>
								</div>
							</div>
							
							<div class="row">
								
								<div class="col-md-12">
									
									<form method="post" action="/add/addEstoque.php" name="realizarDoacao" class="form-horizontal text-left" role="form" onSubmit="return verificaDoacao()">




										<div class="form-group">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Tipo</label>
											</div>
											
											<div class="col-sm-10">
												
												<select name="tipo">
												<option><?php if ($estoque->tipo ==1) { echo "Doação para um Assistido"; } else { echo "Arrecadação de um Doador"; }; ?>
												<option value="1">Doação para um Assistido</option>
												<option value="2">Arrecadação de um Doador</option>
												</select>
											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Produto</label>
											</div>
											
											<div class="col-sm-10">
												
												<select name="produto">
												<option><?php echo $estoque->produto ?></option>
												<?php foreach($produto as $lista) { ?>
												<option><?php echo $lista->nome ?></option>
												<?php }; ?>
												</select>
											</div>
										</div>
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Assistido</label>
											</div>
											
											<div class="col-sm-10">
												
												<select name="assistido">
												<option></option>
												<?php foreach($assistido as $lista) { ?>
												<option><?php echo $lista->nome ?></option>
												<?php }; ?>
												</select>
											</div>
										</div>

																				<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Doador</label>
											</div>
											
											<div class="col-sm-10">
												
												<select name="doador">
												<option></option>
												<?php foreach($doador as $lista) { ?>
												<option><?php echo $lista->nome ?></option>
												<?php }; ?>
												</select>
											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Quantidade</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="quantidade" type="text" required="required" name="numbers" pattern="[0-9]+$" title="Somente números." class="form-control input-lg" id="inputPassword3" placeholder="Quanto será doado do produto?">

											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Data</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="data" type="text" class="form-control input-lg" id="data" placeholder="Que dia este produto foi doado?" readonly>
											</div>
										</div>
										
										<div class="row">
											
											<div class="col-md-6 text-center">
												
												<button type="submit" class="btn btn-lg btn-success" href="telaPrincipal.php">Confirma</button>
											</div>
											
											<div class="col-md-6 text-center">
												
												<a class="btn btn-danger btn-lg" href="telaPrincipal.php">Cancela</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
      </div>
    </div>
  

</body></html>
