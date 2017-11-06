<?php

$host="localhost";
$user="root";
$password = "root";
$database = "projektas";
$port = "8889";

$link = mysqli_connect( $host, $user, $password, $database, $port);

if (mysqli_connect_error()) {
    die();
}

?>
