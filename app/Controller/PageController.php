<?php
    namespace App\Controller;
    use App\Utils\ViewMananger;

    class PageController{

        //funcao Mostrar Pagina
        public static function getPage(){
            return ViewMananger::render("page",  [
                "title"     =>  "SocialMidia | Home ",
                "content"   =>  "SocialMidia | Home ",


            ]);
        }
    }
?>