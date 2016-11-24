<?php

class Disciplina {

    public $codigo;
    public $nome;
    public $descricao;

    public function __construct($codigo, $nome, $descricao) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

}
?>
