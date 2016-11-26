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

    public function insert() {
        
        include_once ("Conexao.php");
        $sql = "INSERT INTO disciplina (codigo_disciplina , nome_disciplina , descricao_disciplina) VALUES ('" . $this->codigo . "','" . $this->nome . "','" . $this->descricao . "')";
        $result = mysqli_query($con, $sql);
        return $result;
        
    }

}

?>
