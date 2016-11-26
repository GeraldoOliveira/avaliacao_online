<?php

class Usuario {

    public $cpf;
    public $tipo;
    public $nome;
    public $email;
    public $senha;

    public function __construct($cpf, $tipo, $nome, $email, $senha) {
        $this->cpf = $cpf;
        $this->tipo = $tipo;
        $this->email = $email;
        $this->nome = $nome;
        $this->senha = $senha;
    }

}
?>
