<?php

    $connect = mysqli_connect('localhost', 'root', '', 'zakharng1');

    if (!$connect) {
        die('Error connect to DataBase');
    }