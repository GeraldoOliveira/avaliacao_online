<?php

include_once("../model/Usuario.php");
include_once ("Conexao.php");

//Procura todos os usuarios
$sql = "SELECT * FROM usuario ORDER BY status_usuario, nome_usuario";
$result = mysqli_query($con, $sql);
$usuarios = array();

// Cria uma array com todos os usuarios
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $usuarios[] = new Usuario($row['cpf_usuario'], $row['tipo_usuario'], $row['nome_usuario'], $row['email_usuario'], $row['senha_usuario'], $row['status_usuario']);
}

if (isset($_GET['CPF']) || isset($_POST['Modificar'])) {
    if (isset($_GET['CPF'])) {   // Configura a view para visualizar disciplina
        $visualizar = "disabled";
        $acao = "Modificar";
        $cpf = $_GET['CPF'];
        $tipo = $_GET['Tipo'];
    } else {                            // Configura a view para alterar disciplina
        $visualizar = "";
        $acao = "Salvar";
        $cpf = $_POST['Modificar'];
        $tipo = $_POST['Tipo'];
    }

    //Procura a disciplina
    $sql = "SELECT * FROM usuario WHERE cpf_usuario = '" . $cpf . "' AND tipo_usuario = '" . $tipo . "'";
    $result = mysqli_query($con, $sql);
    $usuario = array();

    // Cria uma disciplina
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $usuario = new Usuario($row['cpf_usuario'], $row['tipo_usuario'], $row['nome_usuario'], $row['email_usuario'], $row['senha_usuario'], $row['status_usuario']);

    mysqli_close($con);

    include_once ('../view/exibeUsuario.php');
} else if (isset($_POST['Alterar'])) { // Alterar o usuario
    $cpf = $_POST['Salvar'];
    $tipo = $_POST['Tipo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];

    $newusuario = new Usuario($cpf, $tipo, $nome, $email, $senha, $status);

    if ($newusuario->update($cpf, $tipo) == false) {
        header("Location:../view/resposta.php?falha=Não foi possível a a disciplina.");
    } else {
        header("Location:../view/resposta.php?sucesso=Disciplina alterada com sucesso.");
    }
    
} else if (isset($_POST['Buscar'])) { // Busca por uma ou vários usuarios
    $cpf = $_POST['cpf'];
    $tipo = $_POST['tipo'];

    //Procura os tipos de usuarios
    $sql = "SELECT tipo_usuario FROM usuario WHERE tipo_usuario = '" . $tipo . "'";
    $result = mysqli_query($con, $sql);
    $tipos = array();

    // Cria uma array com todos os usuarios
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tipos[] = $row['tipo_usuario'];
    }

    // Define qual busca fazer
    if ($cpf == "" && $tipo == "") {
        $sql = "SELECT * FROM usuario ORDER BY status_usuario, nome_usuario";
    } else if ($cpf == "") {
        $sql = "SELECT * FROM usuario WHERE tipo_usuario = '" . $tipo . "' ORDER BY status_usuario, nome_usuario";
    } else if ($tipo == "") {
        $sql = "SELECT * FROM usuario WHERE cpf_usuario = '" . $cpf . "'";
    } else {
        $sql = "SELECT * FROM usuario WHERE cpf_usuario = '" . $cpf . "' AND tipo_usuario = '" . $tipo . "' ORDER BY status_usuario, nome_usuario";
    }

    //Procura os usuarios
    $result = mysqli_query($con, $sql);
    $usuarios = array();

    //Se caso achar apenas um, exibe informações desse usuario
    if (mysqli_num_rows($result) == 1) {

        $visualizar = "disabled";
        $acao = "Modificar";
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $usuario = new Usuario($row['cpf_usuario'], $row['tipo_usuario'], $row['nome_usuario'], $row['email_usuario'], $row['senha_usuario'], $row['status_usuario']);

        include_once ('../view/exibeUsuario.php');
    } else if (mysqli_num_rows($result) > 1) {

        // Cria um arry com todos os usuarios
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $usuarios[] = new Usuario($row['cpf_usuario'], $row['tipo_usuario'], $row['nome_usuario'], $row['email_usuario'], $row['senha_usuario'], $row['status_usuario']);
        }

        include_once ('../view/listaUsuario.php');
    } else {

        header("Location:../view/resposta.php?busca=Não foi encontrado usuário com o CPF e tipo que você procurou.");
    }

    mysqli_close($con);
} else {
    //Procura os tipos de usuarios
    $sql = "SELECT DISTINCT tipo_usuario FROM usuario ORDER BY tipo_usuario";
    $result = mysqli_query($con, $sql);
    $tipos = array();

    // Cria uma array com todos os usuarios
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tipos[] = $row['tipo_usuario'];
    }

    include_once ('../view/listaUsuario.php');
}
?>

