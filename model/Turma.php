<?php

class Turma {

    public $codigo;
    public $disciplina;
    public $ano;
    public $periodo;
    public $professor;
    public $vagas;
    public $qtde_avaliacao;
    public $status;

    public function __construct($codigo, $disciplina, $ano, $periodo, $professor, $vagas, $qtde_avaliacao, $status) {
        $this->codigo = $codigo;
        $this->disciplina = $disciplina;
        $this->ano = $ano;
        $this->periodo = $periodo;
        $this->professor = $professor;
        $this->vagas = $vagas;
        $this->qtde_avaliacao = $qtde_avaliacao;
        $this->status = $status;
        
    }

}

?>