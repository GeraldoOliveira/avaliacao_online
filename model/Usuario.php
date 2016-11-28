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

    public function insert() {

        include_once ("Conexao.php");
        $sql = "INSERT INTO usuario (cpf_usuario , tipo_usuario , nome_usuario , email_usuario , senha_usuario , status_usuario) VALUES ('" . $this->cpf . "','" . $this->tipo . "','" . $this->nome . "','" . $this->email . "','" . $this->senha . "','" . $this->status . "')";
        echo
        $result = mysqli_query($con, $sql);
        return $result;
    }

    public function update($cpf1,$tipo1) {

        include ("../controller/Conexao.php");
        $sql = "UPDATE usuario SET cpf_usuario = '" . $this->cpf . "' , tipo_usuario = '" . $this->tipo . "' , email_usuario = '" . $this->email . "' , nome_usuario = '" . $this->nome . "' , senha_usuario = '" . $this->senha . "' , status_usuario = '" . $this->status . "' WHERE cpf_usuario = '" . $cpf1 . "' AND tipo_usuario = '" . $tipo1 . "'";
        $result = mysqli_query($con, $sql);
        if (mysqli_affected_rows($con) > 0) {
            return true;
        } else {
            return $sql;
        } 
    }

}

?>
