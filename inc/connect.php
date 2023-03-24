 <?php
$servername = "localhost";
$username = "zakharng_2";
$password = "Zakh123";
$BDname = "zakharng_2";
 
$mysqli = new mysqli($servername, $username, $password, $BDname);
 
if ($mysqli -> connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    exit();
};
