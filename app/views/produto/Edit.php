				<div class="base-home">
					<h1 class="titulo"><span>Editar</span> Produto</h1>
					<div class="base-formulario">
						<form action="<?php echo URL_BASE ."produto/salvar"?>" method="POST"> <!-- precisa definir o caminho do action -->
							<label>Descrição</label>
							<input type="text" name="descricao" value="<?php echo $produto->descricao ?>" placeholder="Insira uma descrição">
							<label>Código EAN</label>
							<input type="text" name="codigo_ean" value="<?php echo $produto->codigo_ean ?>" placeholder="Insira um código EAN">
							<label>SKU</label>
							<input type="text" name="sku" value="<?php echo $produto->sku ?>" placeholder="Insira um código SKU">
							<input type="hidden" name="id_produto" value="<?php echo $produto->id_produto ?>">
							<input type="submit" value="Atualizar" class="btn cad">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</form>
					</div>
				</div>