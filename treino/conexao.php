<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "empresa_teste";

if (mysqli_connect($server, $user, $pass, $bd)){
    echo "conectou";
}else{
    echo "conectou nao";
}
?>