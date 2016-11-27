<?php

class Disciplina {

    public $codigo;
    public $nome;
    public $descricao;
    public $status;

    public function __construct($codigo, $nome, $descricao, $status) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->status = $status;
    }

    public function insert() {

        include ("../controller/Conexao.php");
        $sql = "INSERT INTO disciplina (codigo_disciplina , nome_disciplina , descricao_disciplina) VALUES ('" . $this->codigo . "','" . $this->nome . "','" . $this->descricao . "')";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    public function update($cod) {

        include ("../controller/Conexao.php");
        $sql = "UPDATE disciplina SET codigo_disciplina = '" . $this->codigo . "', nome_disciplina = '" . $this->nome . "', descricao_disciplina = '" . $this->descricao . "', status_disciplina = '" . $this->status . "' WHERE codigo_disciplina = '" . $cod . "'";
        $result = mysqli_query($con, $sql);
        if (mysqli_affected_rows($con) > 0) {
           return true;
        } else {
            return false;
        }
    }

}

?>
