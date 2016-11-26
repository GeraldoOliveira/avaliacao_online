<?php

include_once("../model/Turma.php");

class Cadastrar_turma {

    public function __construct() {
        
        }

    public function invoke() {
        if (!isset($_GET['book'])) {
            // nenhum livro foi requisitado, // mostrar lista de todos os livros disponíveis
            $profs = $this->turma-
            include 'view/booklist.php';
        } else {
            // mostra o livro requisitado
            $book = $this->model->getBook($_GET['book']);
            include 'view/viewbook.php';
        }
    }

}
