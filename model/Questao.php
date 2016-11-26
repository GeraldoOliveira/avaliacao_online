<?php

class Avaliacao {

    public $codigo;
    public $disciplina;
    public $enunciado;
    public $alternativa1;
    public $alternativa2;
    public $alternativa3;
    public $alternativa4;
    public $respota; 

    public function __construct($codigo, $disciplina, $enunciado, $alternativa1, $alternativa2, $alternativa3, $alternativa4, $status) {
        $this->codigo = $codigo;
        $this->disciplina = $disciplina;
        $this->enunciado = $enunciado;
        $this->alternativa1 = $alternativa1;
        $this->alternativa2 = $alternativa2;
        $this->alternativa3 = $alternativa3;
        $this->alternativa4 = $alternativa4;
        $this->respota = $resposta;
    }

}

?>
