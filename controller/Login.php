<?php

if (isset($_POST['submit'])) {

    include ("Conexao.php");
    $login = $_POST['login'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];

    $sql = "SELECT * FROM usuario WHERE cpf_usuario = '" . $login . "' AND senha_usuario = '" . $password . "' AND tipo_usuario = '" . $tipo . "'";

    $result = mysql_query($sql);

    if (mysql_num_rows($result) == 1) {
        
        $row = mysql_fetch_array($result);
        
        // cria sessao
        session_start();
        $_SESSION['nome'] = $row['nome_usuario'];
        $_SESSION['tipo'] = $tipo;
        $_SESSION['cpf'] = $login;
        echo $_SESSION['nome'];
       // header("Location:../view/menuPrincipal.php");
              
    } else {
        
        header("Location:../view/formLogin.php?erro=Login e senha incorretos.");
        
    }
}
?>