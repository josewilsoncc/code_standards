<?php

/*
 * Ejemplo de codificación estandar para PHP 7.0
 *
 * Jose Capera <josewilsoncc@gmail.com>
 *
 */

#El namespace debe de estar relacionado con la ubicación de la clase.
namespace Classes;

class ExampleClass {

    #Las constantes siempre van al principio de la clase, nombradas con mayúscula y guión bajo entre palabras.
    const SOME_CONSTANT_CLASS = 'SOME_CONSTANT_CLASS';

    /*
     * Debido a que los tipos especificos para las varibles de clase estan incluidos a partir de PHP 7.1, si se quiere
     * que una variable sea de tipo String por ejemplo, se debe de declarar como privada y forzarla en los metodos set y
     * get de dicha variable, para este ejemplo: getSomeVar() y setSomeVar(string $someVar).
     */
    private $someVar;

    function __construct()
    {
    }

    public function getSomeVar() : string {
        return $this->someVar;
    }

    public function setSomeVar(string $someVar) {
        $this->someVar = $someVar;
    }
}