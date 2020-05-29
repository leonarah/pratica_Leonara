<?php
    namespace app\controllers;
    use \app\core\Controller;
    
    class HomeController extends Controller {
        
        public function index() { // cria o método index para a classe HomeController
            $dados["view"] = "v_home";
            $this->load("template", $dados);
        }
              
    }
?>