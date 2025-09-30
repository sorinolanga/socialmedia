<?php
    namespace App\Controller;
    use App\Utils\ViewManager;

    class PageController{
        
        public static function getPage(){
            return ViewManager::render("page");

        }

    }


?>