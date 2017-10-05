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