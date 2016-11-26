<?php

$con = mysqli_connect("localhost", "root", "", "avaliacao") or die("Erro ao conectar com o servidor de dados.\n" . mysqli_error($con));
mysqli_select_db($con, "avaliacao") or die("Erro ao conectar com o banco de dados.\n" . mysqli_error($con));

// Tratamento UTF-8 do MYSQL
mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, 'SET character_set_connection=utf8');
mysqli_query($con, 'SET character_set_client=utf8');
mysqli_query($con, 'SET character_set_results=utf8');

?>

