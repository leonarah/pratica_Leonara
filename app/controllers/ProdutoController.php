<?php
    namespace app\controllers;

    use app\core\Controller; // no core pois é uma classe genérica
    use app\models\M_Produto;
    
    class ProdutoController extends Controller {

        public function index() { // metodo padrao do produto
            $produto = new M_Produto(); // cria objeto do tipo model produto
            $dados["produtos"] = $produto->lista(); // pego os produtos retornados do metodo lista da model e armazeno no array dados chave produtos

            $dados["view"] = "produto/List"; // aqui digo que a chave do array dados é view e o valor é produto/List
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function novo() { // metodo novo
            $dados["view"] = "produto/Insert";  // aqui digo que a chave do array dados é view e o valor é produto/Insert
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function salvar() { // metodo salvar recebe as informações da view produto\list
            $produto = new M_Produto(); // cria objeto do tipo model produto
            
            //$nome = $_POST["txt_nome"]; // assim já pega os dados mas
            // por questão de segurança recomenda-se usar strip_tags para quebrar as tags e ficar mais seguro
            // usa-se o issset para verificar se o dado existe, senão retorna null
            $id_produto = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")) : NULL; // usado para a edição do produto
            $descricao = isset($_POST["descricao"]) ? strip_tags(filter_input(INPUT_POST, "descricao")) : NULL; // usado para a edição e inserção do produto
            $codigo_ean = isset($_POST["codigo_ean"]) ? strip_tags(filter_input(INPUT_POST, "codigo_ean")) : NULL; // usado para a edição e inserção do produto
            $sku = isset($_POST["sku"]) ? strip_tags(filter_input(INPUT_POST, "sku")) : NULL; // usado para a edição e inserção do produto

            if($id_produto) { // se existir o id_produto quer dizer que estou editando ele
                $produto->editar($id_produto, $descricao, $codigo_ean, $sku); // chama o metodo e envia as informações para o Model salvar
            } else { //senão existir
                $produto->inserir($descricao, $codigo_ean, $sku); // chama o metodo e envia as informações para o Model salvar
            }

            header("location:" . URL_BASE ."produto"); // após salvar redireciona o usuário para a lista de produtos
        }

        public function editar($id_produto) { // metodo editar
            $produto = new M_Produto(); // cria objeto do tipo model produto
            $dados["produto"] = $produto->getProduto($id_produto); // pego os produtos retornados do metodo lista da model e armazeno no array dados chave produtos

            //var_dump($dados); // usado para imprimir resultado para testes de execução
            //exit; // usado para finalizar impressão do resultado para testes de execução

            $dados["view"] = "produto/Edit"; // aqui digo que a chave do array é view e o valor é produto/Edit
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function excluir($id_produto, $excluir=NULL) { // metodo excluir
            $produto = new M_Produto(); // cria objeto do tipo model produto

            if($excluir=="S") { // se o excluir vier setado com algum valor 'S'
                $produto->excluir($id_produto); // realmente quero excluir, entao chamo o metodo excluir
                header("location:" . URL_BASE ."produto"); // após excluir redireciona o usuário para a lista de produtos
                exit;
            }
            $dados["produto"] = $produto->getProduto($id_produto); // pego o produto retornado do delete

            $dados["view"] = "produto/Delete"; // aqui digo que a chave do array dados é view e o valor é produto/Delete
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }
    }
?>