<?php

class Avaliacao {

    public $codigo;
    public $turma;
    public $qde_questao;
    public $status;

    public function __construct($codigo, $turma, $qde_questao, $status) {
        $this->codigo = $codigo;
        $this->turma = $turma;
        $this->qtde_questao = $qtde_questao;
        $this->status = $status;
    }

}
?>
