<?php

    $connect = mysqli_connect('127.0.0.1', 'root', '', 'mpit');

    if (!$connect) {
        die('Error connect to DataBase');
    }