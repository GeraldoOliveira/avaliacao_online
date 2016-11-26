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
        
        include_once ("Conexao.php");
        $sql = "INSERT INTO disciplina (codigo_disciplina , nome_disciplina , descricao_disciplina) VALUES ('" . $this->codigo . "','" . $this->nome . "','" . $this->descricao . "')";
        $result = mysqli_query($con, $sql);
        return $result;
        
    }

}

?>
