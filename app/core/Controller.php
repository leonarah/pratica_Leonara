<?php

    namespace app\core;

    class Controller {

        public function load($viewName, $viewDados=array()) { // cria o método load para a classe ClienteController
            extract($viewDados); // extrai o array $viewDados e cria uma váriavel para cada chave do array
            include "app/views/" . $viewName .".php";
        }
        
    }
?>