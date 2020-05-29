<?php
    require 'config/config.php'; // require que chama o arquivo de configuração dos endereços, pra facilitar a troca de locais e nomes
    require 'app/core/Core.php';

    //require 'app/controllers/ProdutoController.php'; //chama a classe ProdutoController
    //require 'app/controllers/ClienteController.php'; //chama a classe ClienteController
    require 'vendor/autoload.php'; // ao chama o autoload do composer ele chama as classes conforme vou precisando, não preciso fazer os requires acima, um a um
    
    

    $core = new Core; // cria o objeto do tipo core
    $core->run(); // este objeto executa o metodo run

    /*
    echo "controller: " .$core->getController();
    echo "<br>metodo: " .$core->getMetodo();
    $parametros = $core->getParametros(); // variavel parametros para receber os geters
    foreach ($parametros as $param) 
        echo "<br>parametro: " .$param;
    */
        
?>