                <div class="base-home">
					<h1 class="titulo"><span>Excluir</span> Produto</h1>
					<div class="base-formulario">
						<label>Descricao</label>
						<input type="text" name="descricao" value="<?php echo $produto->descricao ?>" placeholder="Insira uma descrição">
						<label>Código EAN</label>
						<input type="text" name="codigo_ean" value="<?php echo $produto->codigo_ean ?>" placeholder="Insira um código EAN">
						<label>SKU</label>
						<input type="text" name="sku" value="<?php echo $produto->sku ?>" placeholder="Insira um SKU">
                        <div class="col">
                            <a href="<?php echo URL_BASE ."produto/excluir/" .$produto->id_produto."/S" ?>" ><input type="submit" id="button" value="Excluir" class="btn excluir"></a>
                        </div>
					</div>
				</div>