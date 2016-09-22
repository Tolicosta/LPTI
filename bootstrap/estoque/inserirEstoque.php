<?php

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

	</body>
</html>
