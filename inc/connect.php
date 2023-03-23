<?php
    $server_name = "127.0.0.1";
    $username = "root";
    $password = "";
    $BDname = "zakharng1";

    $mysqli = new mysqli($server_name, $username, $password, $BDname);

 
    if ($mysqli -> connect_error) {
        printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    };