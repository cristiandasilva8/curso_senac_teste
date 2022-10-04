<?php

class Carro{
    private $modelo;
    private $cor;
    
    public function __construct(){
        super();
    }

    public function setCor(string $cor){
        $this->cor = $cor;
    }
    public function setModelo(string $modelo){
        $this->modelo = $modelo;}

    public function getCor(){
        return $this->cor;
    }
    public function getModelo(){
        return $this->modelo;
    }

}