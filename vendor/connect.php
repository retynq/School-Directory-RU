<?php

    $connect = mysqli_connect('localhost', 'root', 'Dt1234', 'test');

    if (!$connect) {
        die('Error connect to DataBase');
    }