<?php

class Usuario {

    public $cpf;
    public $tipo;
    public $nome;
    public $email;

    public function __construct($cpf, $tipo, $nome, $email) {
        $this->cpf = $cpf;
        $this->tipo = $tipo;
        $this->email = $email;
        $this->nome = $nome;
    }

}
?>