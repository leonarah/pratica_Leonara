                <div class="base-home">
					<h1 class="titulo"><span>Lista de</span> Produtos</h1>
					<div class="base-lista">
						<span class="qtde"><b><?php echo count($produtos) ?></b> produtos cadastrados</span>
						<div class="tabela">
							<table cellpadding="0" cellspacing="0" border="0">
								<thead>
									<tr>
										<th width="20%" align="center">Descrição</th>
										<th width="15%" align="center">Código EAN</th>
										<th width="15%" align="center">SKU</th>
										<th width="5%" align="center">Ativo</th>
										<th width="20%" align="center" colspan="2">Alterar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($produtos as $produto) { ?>
									<tr>
										<td align="left"><?php echo $produto->descricao ?></td>
										<td align="left"><?php echo $produto->codigo_ean ?></td>
										<td align="left"><?php echo $produto->sku ?></td>
										<td align="left"><?php echo $produto->ativo ?></td>
										<td align="left">
											<a href="<?php echo URL_BASE ."produto/editar/". $produto->id_produto ?>" class="btn editar">Editar</a>
										</td>
										<td align="left">
											<a href="<?php echo URL_BASE ."produto/excluir/". $produto->id_produto?>"class="btn excluir">Excluir</a>
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