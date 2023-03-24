<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Zakhar1111";
$BDname = "zakharng_1";
 
$mysqli = new mysqli($servername, $username, $password, $BDname);
 
if ($mysqli -> connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    exit();
};