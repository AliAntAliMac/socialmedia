<?php
    namespace App\Utils;

    class ViewMananger{
        // funcao que verifica a existenmcia do aarquivo
        private static function getContentView($view){
            $file =__DIR__.'/../../resources/views/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file): "Ficheiro nao encotrado";
        }



        //funcao para reenderizar a view
        public static function render($view, $vars = []){
            $content = self::getContentView($view);

            //renderizando as variaveis

            $keys = array_keys($vars);
            $keys =array_map(function($item){
                return "{{".$item."}}";        
            }, $keys);

            
            return str_replace($keys, array_values($vars), $content);
        }
    }
?>