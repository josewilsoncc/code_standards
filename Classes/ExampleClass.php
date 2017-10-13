<?php

/*
 * Ejemplo de codificación estandar para PHP 7.0
 *
 * Jose Capera <josewilsoncc@gmail.com>
 *
 */

#El namespace debe de estar relacionado con la ubicación de la clase.
namespace Classes;

#Las llaves de las clases siempre van alineadas y en la siguiente linea luego de la declaración
class ExampleClass
{

    #Las constantes siempre van al principio de la clase, nombradas con mayúscula y guión bajo entre palabras.
    const SOME_CONSTANT_CLASS = 'SOME_CONSTANT_CLASS';

    /*
     * Debido a que los tipos especificos para las varibles de clase estan incluidos a partir de PHP 7.1, si se quiere
     * que una variable sea de tipo String por ejemplo, se debe de declarar como privada y forzarla en los métodos set y
     * get de dicha variable, para este ejemplo: getSomeVar() y setSomeVar(string $someVar).
     */
    private $someVar;

    #Este constructor obliga a que el valor asignado a la variable sea de tipo string
    function __construct(string $someVar)
    {
        $this->someVar = $someVar;
    }

    #Este método obliga a que el valor retornado por la variable $someVar sea de tipo string
    public function getSomeVar() : string
    {
        return $this->someVar;
    }

    #Este método obliga a que el valor asignado a la variable sea de tipo string
    public function setSomeVar(string $someVar)
    {
        $this->someVar = $someVar;
    }

    /*
     * la funciones y sus parametros son nombrados usando lowerCamelCase y NO UpperCamelCase.
     * los array al ser inicializados se usan [] y no array()
     */
    public function someFunction(array $someOptionalArray = [])
    {
        #Para un if/else de una unica linea, no usar llaves
        if(empty($someOptionalArray))
            return null;
        else
            return $someOptionalArray;
    }
}