<?php
    // gerencia os dados que o cliente precisará

    namespace app\models;
    use app\core\Model;

    class M_Cliente extends Model {

        public function __construct() { // chama o método construct da classe mãe Model
            parent::__construct();
        }

        public function lista() { // metodo para listar todos os clientes cadastrados no banco
            $sql = "SELECT * FROM cliente";
            $qry = $this->db->query($sql); // query do pdo com acesso ao bd

            //return $qry->fetchAll(); // retorna todos os registros
            return $qry->fetchAll(\PDO::FETCH_OBJ); // retorna todos os registros a nível de objeto
        }

        public function getCliente($id_cliente) {
            $resultado = array();
            $sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente";

            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":id_cliente", $id_cliente); // comando para inserir
            $qry->execute(); // comando para executar

            if($qry->rowCount() > 0) { // se a consulta do BD retornar mais de uma linha encontrou cliente
                $resultado = $qry->fetch(\PDO::FETCH_OBJ); // retorna todos os registros a nível de objeto
            }
            return $resultado; // senao retorna array vazio
        }

        public function inserir($nome, $email, $endereco, $bairro, $cep, $cpf, $fone) { // metodo para gravar novos clientes no BD

            //$nome = $_POST["txt_nome"]; // assim já pega os dados mas
            // por questão de segurança recomenda-se usar strip_tags para quebrar as tags e ficar mais seguro
            // usa-se o issset para verificar se o dado existe, senão retorna null
            $nome = isset($_POST["txt_nome"]) ? strip_tags(filter_input(INPUT_POST, "txt_nome")) : NULL; // usado para a edição e inserção do cliente
            $email = isset($_POST["txt_email"]) ? strip_tags(filter_input(INPUT_POST, "txt_email")) : NULL; // usado para a edição e inserção do cliente
            $endereco = isset($_POST["txt_endereco"]) ? strip_tags(filter_input(INPUT_POST, "txt_endereco")) : NULL; // usado para a edição e inserção do cliente
            $bairro = isset($_POST["txt_bairro"]) ? strip_tags(filter_input(INPUT_POST, "txt_bairro")) : NULL; // usado para a edição e inserção do cliente
            $cep = isset($_POST["txt_cep"]) ? strip_tags(filter_input(INPUT_POST, "txt_cep")) : NULL; // usado para a edição e inserção do cliente
            $cpf = isset($_POST["txt_cpf"]) ? strip_tags(filter_input(INPUT_POST, "txt_cpf")) : NULL; // usado para a edição e inserção do cliente
            $fone = isset($_POST["txt_fone"]) ? strip_tags(filter_input(INPUT_POST, "txt_fone")) : NULL; // usado para a edição e inserção do cliente

            $sql = "INSERT INTO cliente SET nome = :nome, email = :email, endereco = :endereco, bairro = :bairro, cep = :cep, cpf = :cpf, fone = :fone";
            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":nome", $nome); // comando para inserir
            $qry->bindValue(":email", $email); // comando para inserir
            $qry->bindValue(":endereco", $endereco); // comando para inserir
            $qry->bindValue(":bairro", $bairro); // comando para inserir
            $qry->bindValue(":cep", $cep); // comando para inserir
            $qry->bindValue(":cpf", $cpf); // comando para inserir
            $qry->bindValue(":fone", $fone); // comando para inserir
            $qry->execute(); // comando para executar

            return $this->db->lastInsertId(); // retorna o id do ultimo registro inserido
        }

        public function editar($id_cliente, $nome, $email, $endereco, $bairro, $cep, $cpf, $fone) { // metodo para editar clientes no BD

            //$nome = $_POST["txt_nome"]; // assim já pega os dados mas
            // por questão de segurança recomenda-se usar strip_tags para quebrar as tags e ficar mais seguro
            // usa-se o issset para verificar se o dado existe, senão retorna null
            $id_cliente = isset($_POST["id_cliente"]) ? strip_tags(filter_input(INPUT_POST, "id_cliente")) : NULL; // usado para a edição do cliente
            $nome = isset($_POST["txt_nome"]) ? strip_tags(filter_input(INPUT_POST, "txt_nome")) : NULL; // usado para a edição e inserção do cliente
            $email = isset($_POST["txt_email"]) ? strip_tags(filter_input(INPUT_POST, "txt_email")) : NULL; // usado para a edição e inserção do cliente
            $endereco = isset($_POST["txt_endereco"]) ? strip_tags(filter_input(INPUT_POST, "txt_endereco")) : NULL; // usado para a edição e inserção do cliente
            $bairro = isset($_POST["txt_bairro"]) ? strip_tags(filter_input(INPUT_POST, "txt_bairro")) : NULL; // usado para a edição e inserção do cliente
            $cep = isset($_POST["txt_cep"]) ? strip_tags(filter_input(INPUT_POST, "txt_cep")) : NULL; // usado para a edição e inserção do cliente
            $cpf = isset($_POST["txt_cpf"]) ? strip_tags(filter_input(INPUT_POST, "txt_cpf")) : NULL; // usado para a edição e inserção do cliente
            $fone = isset($_POST["txt_fone"]) ? strip_tags(filter_input(INPUT_POST, "txt_fone")) : NULL; // usado para a edição e inserção do cliente

            $sql = "UPDATE cliente SET nome = :nome, email = :email, endereco = :endereco, bairro = :bairro, cep = :cep, cpf = :cpf, fone = :fone WHERE id_cliente = :id_cliente";
            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":nome", $nome); // comando para inserir
            $qry->bindValue(":email", $email); // comando para inserir
            $qry->bindValue(":endereco", $endereco); // comando para inserir
            $qry->bindValue(":bairro", $bairro); // comando para inserir
            $qry->bindValue(":cep", $cep); // comando para inserir
            $qry->bindValue(":cpf", $cpf); // comando para inserir
            $qry->bindValue(":fone", $fone); // comando para inserir
            $qry->bindValue(":id_cliente", $id_cliente); // comando para inserir
            $qry->execute(); // comando para executar
        }

        public function excluir($id_cliente, $excluir) { // metodo para gravar novos clientes no BD

            if($excluir=="S") { // se o excluir vier setado com algum valor 'S'
                $sql = "DELETE FROM cliente WHERE id_cliente = :id_cliente";
                $qry = $this->db->prepare($sql); // prepare para os dados externos
                $qry->bindValue(":id_cliente", $id_cliente); // comando para inserir
                $qry->execute(); // comando para executar
            }
        }
    }

?>