<?php

$con = mysqli_connect("localhost", "root", "", "avaliacao") or die("Erro ao conectar com o servidor de dados.\n" . mysqli_errno($con));
mysqli_select_db($con, "avaliacao") or die("Erro ao conectar com o banco de dados.\n" . mysqli_error($con));

?>

