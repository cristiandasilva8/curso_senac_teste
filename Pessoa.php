<?php

class Pessoa{

    private string $nome;
    private DateTimeImmutable $dataNascimento;
    private float $alturaPessoa;

    public function __construct (string $nome, DateTimeImmutable $dataNascimento, float $alturaPessoa)
    {
        $this->nome=$nome;
        $this->dataNascimento = $dataNascimento;
        $this->alturaPessoa=$alturaPessoa;
    }
    public function nome(){
        return $this->nome;
    }
    //atividade
    public function verificaNome($nome): bool
    {
        if (is_string($nome)){
            return true;
            
        }else{
            return false;
        }
    }
    //atividade
    public function idade(){
        $hoje= new DateTimeImmutable();
        $diferença= $this->dataNascimento->diff($hoje);
        return $diferença->y;
    }
//atividadeaula03
    public function alturaPessoa(){
        
        return $this -> $alturaPessoa;
    }   
    
}