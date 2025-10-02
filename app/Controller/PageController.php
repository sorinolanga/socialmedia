<?php
    namespace App\Controller;
    use App\Utils\ViewManager;

    class PageController{
        
        //Funcao mostrar pagina
        public static function getPage(){
            return ViewManager::render("page",["title"=>"SocialMedia|Home",
                   "content"=>"SocialMedia|Home",]
                );

        }

    }


?>