<?php

if (isset($_POST['submit'])) {

    include ("Conexao.php");
    $login = $_POST['login'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];

    $sql = "SELECT * FROM usuario WHERE cpf_usuario = '" . $login . "' AND tipo_usuario = '" . $tipo . "'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row['senha_usuario'] == $password) {
            session_start();
            $_SESSION['nome'] = $row['nome_usuario'];
            $_SESSION['tipo'] = $tipo;
            $_SESSION['cpf'] = $login;
            header("Location:../view/menuPrincipal.php");
        } else {
            header("Location:../view/formLogin.php?erro=Senha incorreta.");
        }
    } else {
        //echo $sql;
        header("Location:../view/formLogin.php?erro=Usuário inválido.");
    }
}
?>