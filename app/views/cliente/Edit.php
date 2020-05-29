				<div class="base-home">
					<h1 class="titulo"><span>Editar</span> Cliente</h1>
					<div class="base-formulario">
						<form action="<?php echo URL_BASE ."cliente/atualizar/". $cliente->id_cliente ?>" method="POST"> <!-- precisa definir o caminho do action -->
							<label>Nome</label>
							<input type="text" name="txt_nome" value="<?php echo $cliente->nome ?>" placeholder="Insira um nome">
							<label>E-mail</label>
							<input type="text" name="txt_email" value="<?php echo $cliente->email ?>" placeholder="Insira um e-mail">
							<label>Endereço</label>
							<input type="text" name="txt_endereco" value="<?php echo $cliente->endereco ?>" placeholder="Insira um endereço">
							<div class="col">
								<label>Bairro</label>
								<input type="text" name="txt_bairro" value="<?php echo $cliente->bairro ?>" placeholder="Insira um bairro">
							</div>
							<div class="col">
								<label>CEP</label>
								<input type="text" name="txt_cep" value="<?php echo $cliente->cep ?>" placeholder="Insira um CEP">
							</div>
							<div class="col">
								<label>CPF</label>
								<input type="text" name="txt_cpf" value="<?php echo $cliente->cpf ?>" placeholder="Insira um CPF">
							</div>
							<div class="col">
								<label>Telefone</label>
								<input type="text" name="txt_fone" value="<?php echo $cliente->fone ?>" placeholder="Insira um telefone">
							</div>
							<input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente ?>">
							<input type="submit" value="Atualizar" class="btn cad">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</form>
					</div>
				</div>