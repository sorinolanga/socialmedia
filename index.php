<?php
#chamar o autoload
require __DIR__."/vendor/autoload.php";
#testrar :chamar a classe PageController para verificar das pastas, pe
use App\Controller\PageController;
//Chamar a funcao 
echo PageController::getPage();


?>