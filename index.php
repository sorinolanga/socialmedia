<?php
#chamar o autoload
require __DIR__."/vendor/autoload.php";
#testrar :verificar das pastas, pe
use App\Controller\PageController;

echo PageController::getPage();


?>