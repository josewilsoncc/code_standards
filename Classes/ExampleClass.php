<?php

/*
 * Ejemplo de codificación estandar
 *
 * Jose Capera <josewilsoncc@gmail.com>
 *
 */

#El namespace debe de estar relacionado con la ubicación de la clase.
namespace Classes;

class ExampleClass {

    const SOME_CONSTANT_CLASS = 'SOME_CONSTANT_CLASS';
    /**
     * @var string
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