<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa_teste";

    $conn = mysqli_connect($server, $user, $pass, $bd);
    if($conn->connect_error){
        die("Deu ruim ". $conn->connect_error);
    }