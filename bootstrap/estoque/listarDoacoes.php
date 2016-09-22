<?php

//PEGANDO O NOME DOS MEMBROS PARA LISTAGEM
$url = 'http://localhost:8080/restmongo/rest/estoque/procurarTipo/1';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$doacao = json_decode($data);

?>

          <div id="conteudo">
			  <div class="col-md-8">
				<div class="row">
				  <div class="col-md-12">
					<h1 class="text-center">DOAÇÕES</h1>
<br>
				  </div>
				</div>
				<table class="table table-bordered table-hover">
				  <thead>
					<tr>
					  <th class="info">Produto</th>
					  <th class="info">Quantidade</th>
					  <th class="info">Assistido</th>
					  <th class="info">Data</th>
					  <th class="info">Responsável</th>
					  <th class="info">Ações</th>
					</tr>
				  </thead>
				  <tbody>
					<?php foreach($doacao as $lista){ ?>
											<tr>
													<td><?php echo $lista->produto ?></td>
													<td><?php echo $lista->quantidade ?></td>
													<td><?php echo $lista->assistido ?></td>
													<td><?php echo $lista->data ?></td>
													<td>Responsável</td>
													<td>
															<a href="../delete.php?id=<?php echo "estoque/deletar/".$lista->id ?>" onclick="return confirm('Deseja realmente excluir esse registro?') ;"> Excluir</a>
															<a href="editarEstoque.php?id=<?php echo $lista->id ?>"> Editar</a>
													</td>
											</tr>
									<?php }; ?>
				  </tbody>
				</table>
			  </div>
			</div>
        </div>
      </div>
    </div>
  

</body></html>
