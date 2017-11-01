<?php

$host="localhost";
$user="valdas";
$password = "valdas123";
$database = "hospital10";
$port = "8889";


$connection = mysqli_connect( $host, $user, $password, $database, $port);

if ($connection) {
    echo "Connected";
} else {
    die(mysqli_connect_error());
}

function getConnection() {
    global $connection;
    return $connection;
}

function getUser($nr) {
    $sql_tekstas = "SELECT * FROM doctors WHERE id='$nr'";
    $rezultatai = mysqli_query(getConnection(), $sql_tekstas);
    // print_r($rezultatai);
    if ($rezultatai) {
        $user=mysqli_fetch_assoc($rezultatai);
        return $user;
    } else {
        echo "Klaida: " . mysqli_error($connection);
        return NULL;
    }
}

echo getUser(3)['name'];
