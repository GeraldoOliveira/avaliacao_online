<?php

class Usuario {

    public $cpf;
    public $tipo;
    public $nome;
    public $email;
    public $senha;
    public $status;

    public function __construct($cpf, $tipo, $nome, $email, $senha, $status) {
        $this->cpf = $cpf;
        $this->tipo = $tipo;
        $this->email = $email;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->status = $status;
    }

}
?>
