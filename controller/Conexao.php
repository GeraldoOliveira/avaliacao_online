<?php

mysql_connect("localhost", "root", "") or die("Erro ao conectar com o servidor de dados.\n" . mysqlerror());
mysql_select_db("avaliacao") or die("Erro ao conectar com o banco de dados.\n" . mysqlerror());

?>

