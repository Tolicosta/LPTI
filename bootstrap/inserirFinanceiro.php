<div id="conteudo">
				<div class="row">
						
						<div class="col-md-4" id="formulario">
							
							<div class="row">
								
								<div class="col-md-12">
									
									<h1 class="text-center">INSERIR REGISTRO FINANCEIRO</h1>
									<br>
								</div>
							</div>
							
							<div class="row">
								
								<div class="col-md-12">
									
									<form method="post" action="addFinanceiro.php" name="realizarDoacao" class="form-horizontal text-left" role="form" onSubmit="return verificaDoacao()">




										<div class="form-group">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Tipo</label>
											</div>
											
											<div class="col-sm-10">
												
												<select name="tipo">
												<option value="1">Entrada de Dinheiro</option>
												<option value="2">Retirada de Dinheiro</option>
												</select>
											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Valor</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="valor" type="text" required="required" name="numbers" pattern="[0-9]+$" title="Somente números." class="form-control input-lg" id="inputPassword3" placeholder="Qual o valor a ser recebido/retirado?">

											</div>
										</div>

										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Descrição</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="descricao" type="text" required="required" class="form-control input-lg" id="inputPassword3" placeholder="Do que se trata o evento?">

											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Data</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="data" type="text" class="form-control input-lg" id="data" placeholder="Quando esse registro foi feito?" readonly>
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
