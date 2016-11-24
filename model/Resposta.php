<?php

class Resposta {

    public $aluno;
    public $avaliacao;
    public $questao;
    public $resposta;
    public $status;

    public function __construct($aluno, $avaliacao, $questao, $resposta, $status) {
        $this->aluno = $aluno;
        $this->avaliacao = $avaliacao;
        $this->questao = $questao;
        $this->resposta = $resposta;
        $this->status = $status;
        
    }

}

?>
