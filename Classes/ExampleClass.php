<?php

/*
 * This file is part of the php code standards.
 *
 * Jose Capera <josewilsoncc@gmail.com>
 *
 */

namespace Classes;

class ExampleClass {
    
    const SOME_CONSTANT_CLASS = 'SOME_CONSTANT_CLASS';
    /**
     * @var string
     */
    private $someVar;

    public function getSomeVar() : string {
        return $this->someVar;
    }

    public function setSomeVar(string $someVar) {
        $this->someVar = $someVar;
    }
}