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
        $this->nome = $senha;
    }

    public function listProfessores() {

        include_once ("Conexao.php");
        $sql = "SELECT nome_usuario FROM usuario WHERE tipo_usuario = 'Professor'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
}
?>
}
?>