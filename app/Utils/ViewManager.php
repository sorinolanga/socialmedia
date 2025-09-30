<?php
namespace App\Utils;

class ViewManager {
#Funcao responsavel por buscar as paginas
private static function getContentView($view){
$file = __DIR__.'/../../resources/views/'.$view.'.html';
return file_exists ($file)? file_get_contents($file):"Ficheiro nao encontrado";
}

#Funcao que reenderiza a view
public static function render($view){
$contentView = self::getContentView($view);
return $contentView;
    }
    }
    
    ?>