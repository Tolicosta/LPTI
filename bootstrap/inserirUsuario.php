<div id="conteudo">
				<div class="row">
						
						<div class="col-md-4" id="formulario">
							
							<div class="row">
								
								<div class="col-md-12">
									
									<h1 class="text-center">INSERIR MEMBRO</h1>
									<br>
								</div>
							</div>
							
							<div class="row">
								
								<div class="col-md-12">
									
									<form method="post" action="addMembro.php" name="realizarDoacao" class="form-horizontal text-left" role="form" onSubmit="return verificaDoacao()">




										<div class="form-group">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Tipo</label>
											</div>
											
											<div class="col-sm-10">
												
												<select name="tipo">
												<option value="1">Administrador</option>
												<option value="2">Usuário</option>
												</select>
											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Nome</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="nome" type="text" required="required" class="form-control input-lg" id="inputPassword3" placeholder="Qual o nome do evento?">

											</div>
										</div>

										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Telefone</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="telefone" type="text" required="required" class="form-control input-lg" id="inputPassword3" placeholder="Qual o nome do evento?">

											</div>
										</div>

										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Login</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="login" type="text" required="required" class="form-control input-lg" id="inputPassword3" placeholder="Qual o nome do evento?">

											</div>
										</div>

										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">E-mail</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="email" type="text" required="required" class="form-control input-lg" id="inputPassword3" placeholder="Qual o nome do evento?">

											</div>
										</div>

										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Senha</label>
											</div>
											
											<div class="col-sm-10">
												
												<input name="senha" type="text" required="required" name="numbers" pattern="[0-9]+$" title="Somente números." class="form-control input-lg" id="inputPassword3" placeholder="Quanto será doado do produto?">

											</div>
										</div>
										
										<div class="form-group has-feedback">
											
											<div class="col-sm-2">
												
												<label for="inputEmail3" class="control-label">Data de Cadastro</label>
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
