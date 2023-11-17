<?php
namespace App\model;

class Golfinho {
    private $nome;
    private $idade;
    private $cor;

    public function __construct($nome, $idade, $cor) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cor = $cor;
    }


    public function getInfo(){
        return "Golfinho: {$this->nome}, {$this->idade}, {$this->cor}, ";
    }

    public function nadar() {
        echo $this->nome . " está nadando!\n";
    }

}

?> 