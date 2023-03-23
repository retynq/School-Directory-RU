<?php

    $connect = mysqli_connect('localhost', 'root1', '', 'mpit');

    if (!$connect){
        die('Error connect to DataBase');
    }