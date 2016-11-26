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

    public function getProfList() {
        // aqui vão alguns registros para simular uma base de dados
        include_once ("Conexao.php");
        $sql = "SELECT nome_usuario FROM usuario WHERE tipo_usuario = 'Professor'";
        $allProf = mysql_query($sql);
        mysql_close();
        return $allProf;
    }

}

?>