<?php

    $connect = mysqli_connect('localhost', 'root', '', 'mpit');

    if (!$connect){
        die('Error connect to DataBase');
    }