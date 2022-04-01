<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "es27";
    
    $mysql = mysqli_connect($host, $user, $password, $database);

    $SQL = "SELECT * FROM es27.candidati";
    $risultato = mysqli_query($mysql, $SQL);

    $cognome = $_POST["cognome"];
    $nome = $_POST["nome"];

    $query_insert = "INSERT INTO `candidati` VALUES ('$cognome', '$nome');";

    $risultato_insert = mysqli_query($mysql, $query_insert);

?>