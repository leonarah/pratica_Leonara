                <div class="base-home">
					<h1 class="titulo"><span>Lista de</span> Clientes</h1>
					<div class="base-lista">
						<span class="qtde"><b><?php echo count($clientes) ?></b> clientes cadastrados</span>
						<div class="tabela">
							<table cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th width="20%" align="center">Nome</th>
										<th width="15%" align="center">E-mail</th>
										<th width="15%" align="center">Endereço</th>
										<th width="10%" align="center">Bairro</th>
										<th width="5%" align="center">CEP</th>
										<th width="5%" align="center">CPF</th>
										<th width="5%" align="center">Telefone</th>
										<th width="5%" align="center">Ativo</th>
										<th width="20%" align="center" colspan="2">Alterar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($clientes as $cliente) { ?>
									<tr>
										<td align="left"><?php echo $cliente->nome ?></td>
										<td align="left"><?php echo $cliente->email ?></td>
										<td align="left"><?php echo $cliente->endereco ?></td>
										<td align="left"><?php echo $cliente->bairro ?></td>
										<td align="left"><?php echo $cliente->cep ?></td>
										<td align="left"><?php echo $cliente->cpf ?></td>
										<td align="left"><?php echo $cliente->fone ?></td>
										<td align="left"><?php echo $cliente->ativo ?></td>
										<td align="left">
											<a href="<?php echo URL_BASE ."cliente/ver_edit/". $cliente->id_cliente ?>" class="btn editar">Editar</a>
										</td>
										<td align="left">
											<a href="<?php echo URL_BASE ."cliente/ver_excluir/". $cliente->id_cliente?>"class="btn excluir">Excluir</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<ul class="paginacao">
							<li><a href="" class="primeiro">Primeiro</a></li>
							<li><a href="" class="ant"></a></li>
							<li class="ativo">1</li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">5</a></li>
							<li><a href="" class="prox"></a></li>
							<li><a href="" class="ultimo">Último</a></li>
						</ul>
					</div>
				</div>