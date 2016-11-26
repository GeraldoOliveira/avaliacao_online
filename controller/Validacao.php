<?php

session_start();
if (!isset($_SESSION["cpf"])) {
header("Location:../view/formlogin.php?erro=Usuário não logado.");
}

?>