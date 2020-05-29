<?php
    namespace app\core;

    abstract class Model { // abstrata pois não preciso criar a partir dela, somente iremos herdar
        protected $db;

        public function __construct() {
            $this->db = new \PDO("mysql:dbname=".BANCO.";host=".SERVIDOR,USUARIO,SENHA);
        }
    }

?>