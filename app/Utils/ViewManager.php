<?php
namespace App\Utils;

class ViewManager {
#Funcao responsavel por buscar as paginas/verifica a existencia de arquivo
private static function getContentView($view){
$file = __DIR__.'/../../resources/views/'.$view.'.html';
return file_exists ($file)? file_get_contents($file):"Ficheiro nao encontrado";
}

#Funcao que reenderiza(processa) a view
public static function render($view, $vars=[]){
$content = self::getContentView($view);

//renderizando as variaveis
$keys = array_keys($vars);
$keys= array_map(function($item){
    return "{{".$item."}}";

},$keys);
return str_replace($keys,array_values($vars),$content);
    }
    }
    
    ?>