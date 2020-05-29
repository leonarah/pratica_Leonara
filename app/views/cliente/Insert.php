                <div class="base-home">
					<h1 class="titulo"><span>Novo</span> Cliente</h1>
					<div class="base-formulario">
						<form action="<?php echo URL_BASE ."cliente/salvar"?>" method="POST"> <!-- precisa definir o caminho do action -->
							<label>Nome</label>
							<input type="text" name="txt_nome" placeholder="Insira um nome">
							<label>E-mail</label>
							<input type="text" name="txt_email" placeholder="Insira um e-mail">
							<label>Endereço</label>
							<input type="text" name="txt_endereco" placeholder="Insira um endereço">
							<div class="col">
								<label>Bairro</label>
								<input type="text" name="txt_bairro" placeholder="Insira um bairro">
							</div>
							<div class="col">
								<label>CEP</label>
								<input type="text" name="txt_cep" placeholder="Insira um CEP">
							</div>
							<div class="col">
								<label>CPF</label>
								<input type="text" name="txt_cpf" placeholder="Insira um CPF">
							</div>
							<div class="col">
								<label>Telefone</label>
								<input type="text" name="txt_fone" placeholder="Insira um telefone">
							</div>
							<input type="submit" value="Cadastrar" class="btn cad">
							<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
						</form>
					</div>
				</div>