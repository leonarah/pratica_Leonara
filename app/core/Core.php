<?php

    class Core { // classe coração 

        private $controller; // atributo da classe Core
        private $metodo; // atributo da classe Core
        private $parametros = array(); // atributo da classe Core

        public function __construct() { // metodo construtor da classe core
            $this->verificaUri(); // ao ser criado já chama a função
        }

        public function run() {
            $controllerCorrente = $this->getController();
            $c = new $controllerCorrente; // cria o objeto com tipo desta classse $controllerCorrente
            //echo $c->lista(); // imprime apenas o método lista 
            call_user_func_array(array($c, $this->getMetodo()), $this->getParametros()); // função que pega dinamicamente os metodos do objeto $c e seus parametros e cria um array com os dados
        }

        public function verificaUri() { // metodo run que vai executar a estrutura mvc
            $url = explode("index.php", $_SERVER["PHP_SELF"]); // quebra a url em duas posições no array, uma antes do index e outra após
            $url= end($url); //pega a última posição do array (ou seja após o index)

            if($url != "") {
                $url = explode('/', $url); // explode a url existente em posições do array separando pela barra
                array_shift($url); // exclui o primeiro regisro do array (vazio)

                // pega o controller
                //cliente -> ClienteController.php
                $this->controller = ucfirst($url[0]) ."Controller"; // seta esse atributo controller com a posição 0 do array, passa a primeira letra pra maiusculo e concatena
                array_shift($url); // exclui o primeiro regisro do array (controle)
                
                // pega o método
                if(isset($url[0])) {// só se existir valor na posição 0
                    $this->metodo = $url[0]; // seta esse atributo metodo com a posição 0 do array
                    array_shift($url); // exclui o primeiro regisro do array (metodo)
                }

                // pega os parametros
                if(isset($url[0])) {// só se existir valor na posição 0
                    $this->parametros = array_filter($url); // array_filter pega só os valores válidos do array
                }                    
            } else {
                $this->controller = ucfirst(CONTROLLER_PADRAO) ."Controller";
            }
        }

        public function getController() {
            if (class_exists(NAMESPACE_CONTROLLER .$this->controller)) {
                return NAMESPACE_CONTROLLER .$this->controller; // se a classe existe na url retorna ela
            }
            //return "app\\controllers\\IndexController"; // se a classe não existe na url retorna uma classe padrão 'IndexController', também podemos exibir um erro ou redirecionar para uma página 404
            return NAMESPACE_CONTROLLER .ucfirst(CONTROLLER_PADRAO) ."Controller"; // se a classe não existe na url retorna uma classe padrão
        }

        public function getMetodo() {
            if(method_exists(NAMESPACE_CONTROLLER .$this->controller, $this->metodo)) { // verifica se o metodo existe na url
                return $this->metodo;
            }
            return METODO_PADRAO; // se não existir método chama o método padrão
        }

        public function getParametros() {
            return $this->parametros;
        }

    }

?>