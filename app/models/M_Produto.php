<?php
    // gerencia os dados que o produto precisará

    namespace app\models;
    use app\core\Model;

    class M_Produto extends Model {

        public function __construct() { // chama o método construct da classe mãe Model
            parent::__construct();
        }

        public function lista() { // metodo para listar todos os produtos cadastrados no banco
            $sql = "SELECT * FROM produto";
            $qry = $this->db->query($sql); // query do pdo com acesso ao bd

            //return $qry->fetchAll(); // retorna todos os registros
            return $qry->fetchAll(\PDO::FETCH_OBJ); // retorna todos os registros a nível de objeto
        }

        public function getProduto($id_produto) {
            $resultado = array();
            $sql = "SELECT * FROM produto WHERE id_produto = :id_produto";

            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":id_produto", $id_produto); // comando para inserir
            $qry->execute(); // comando para executar

            if($qry->rowCount() > 0) { // se a consulta do BD retornar mais de uma linha encontrou produto
                $resultado = $qry->fetch(\PDO::FETCH_OBJ); // retorna todos os registros a nível de objeto
            }
            return $resultado; // senao retorna array vazio
        }

        public function inserir($descricao, $codigo_ean, $sku) { // metodo para gravar novos produtos no BD
            $sql = "INSERT INTO produto SET descricao = :descricao, codigo_ean = :codigo_ean, sku = :sku";
            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":descricao", $descricao); // comando para inserir
            $qry->bindValue(":codigo_ean", $codigo_ean); // comando para inserir
            $qry->bindValue(":sku", $sku); // comando para inserir
            $qry->execute(); // comando para executar

            return $this->db->lastInsertId(); // retorna o id do ultimo registro inserido
        }

        public function editar($id_produto, $descricao, $codigo_ean, $sku) { // metodo para editar produtos no BD
            $sql = "UPDATE produto SET descricao = :descricao, codigo_ean = :codigo_ean, sku = :sku WHERE id_produto = :id_produto";
            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":descricao", $descricao); // comando para inserir
            $qry->bindValue(":codigo_ean", $codigo_ean); // comando para inserir
            $qry->bindValue(":sku", $sku); // comando para inserir
            $qry->bindValue(":id_produto", $id_produto); // comando para inserir
            $qry->execute(); // comando para executar
        }

        public function excluir($id_produto) { // metodo para gravar novos produtos no BD
            $sql = "DELETE FROM produto WHERE id_produto = :id_produto";
            $qry = $this->db->prepare($sql); // prepare para os dados externos
            $qry->bindValue(":id_produto", $id_produto); // comando para inserir
            $qry->execute(); // comando para executar
        }
    }

?>