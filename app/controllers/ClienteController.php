<?php
    namespace app\controllers;

    use app\core\Controller; // no core pois é uma classe genérica
    use app\models\M_Cliente;
    use app\routes\routes;
    
    class ClienteController extends Controller {

        public function index() { // metodo padrao do cliente
            $cliente = new M_Cliente(); // cria objeto do tipo model cliente
            $dados["clientes"] = $cliente->lista(); // pego os clientes retornados do metodo lista da model e armazeno no array dados chave clientes

            $dados["view"] = "cliente/List"; // aqui digo que a chave do array dados é view e o valor é cliente/List
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function novo() { // metodo novo
            $dados["view"] = "cliente/Insert";  // aqui digo que a chave do array dados é view e o valor é cliente/Insert
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function salvar() { // metodo salvar recebe as informações da view cliente\list
            $cliente = new M_Cliente(); // cria objeto do tipo model cliente
            $cliente->inserir($nome, $email, $endereco, $bairro, $cep, $cpf, $fone); // chama o metodo inserir do model M_Cliente
            
            header("location:" . URL_BASE ."cliente"); // após salvar redireciona o usuário para a lista de clientes
        }

        public function ver_edit($id_cliente) { // metodo editar
            $cliente = new M_Cliente(); // cria objeto do tipo model cliente
            $dados["cliente"] = $cliente->getCliente($id_cliente); // pego os clientes retornados do metodo lista da model e armazeno no array dados chave clientes

            $dados["view"] = "cliente/Edit"; // aqui digo que a chave do array é view e o valor é cliente/Edit
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function atualizar($id_cliente) { // metodo editar
            $cliente = new M_Cliente(); // cria objeto do tipo model cliente

            $cliente->editar($id_cliente, $nome, $email, $endereco, $bairro, $cep, $cpf, $fone); // chama o metodo editar do model M_Cliente
            //var_dump($dados); // usado para imprimir resultado para testes de execução
            //exit; // usado para finalizar impressão do resultado para testes de execução
            
            header("location:" . URL_BASE ."cliente"); // após atualizar redireciona o usuário para a lista de clientes
        }

        public function ver_excluir($id_cliente, $excluir=NULL) { // metodo excluir
            $cliente = new M_Cliente(); // cria objeto do tipo model cliente
            $dados["cliente"] = $cliente->getCliente($id_cliente); // pego o cliente retornado do delete

            $dados["view"] = "cliente/Delete"; // aqui digo que a chave do array dados é view e o valor é cliente/Delete
            $this->load("template", $dados); // Carrega no campo do template (corpo) a view passada acima
        }

        public function excluir($id_cliente, $excluir) { // metodo excluir
            $cliente = new M_Cliente(); // cria objeto do tipo model cliente
           
            $cliente->excluir($id_cliente, $excluir); // realmente quero excluir, entao chamo o metodo excluir
            header("location:" . URL_BASE ."cliente"); // após excluir redireciona o usuário para a lista de clientes
        }
    }
?>