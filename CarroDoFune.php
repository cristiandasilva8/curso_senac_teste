<?php

class CarroDoFune{
    private $modelo;
    private $cor;

    public function __construct(){
        super();
    }

    public function setModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function setCor(string $cor){
        $this->cor = $cor;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getCor(){
        return $this->cor;
    }

}