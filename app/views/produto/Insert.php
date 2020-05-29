                <div class="base-home">
					<h1 class="titulo"><span>Novo</span> Produto</h1>
					<div class="base-formulario">
						<form action="<?php echo URL_BASE ."produto/salvar"?>" method="POST"> <!-- precisa definir o caminho do action -->
							<label>Descrição</label>
							<input type="text" name="descricao" placeholder="Insira uma descrição">
							<label>Código EAN</label>
							<input type="text" name="codigo_ean" placeholder="Insira um código EAN">
							<label>SKU</label>
							<input type="text" name="sku" placeholder="Insira um código SKU">
							<input type="submit" value="Cadastrar" class="btn cad">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</form>
					</div>
				</div>