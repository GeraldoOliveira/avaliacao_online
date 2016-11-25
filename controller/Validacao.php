<?php

session_start();
if (!isset($_SESSION["codigo"])) {
header("Location:../view/formlogin.php?erro=Usuário não logado.");
}

?>