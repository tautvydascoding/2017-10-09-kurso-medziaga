<?php
    include "db.php";


    if (isset($_GET['logout'])) {
        if ($_GET['logout']) {
            setcookie("customer", "", time() - 60 * 60);
            header('Location: index.php');
            die();
        }
    }



    if(isset($_POST["username"]) && isset($_POST["password"])) {

        $query = "SELECT * FROM users WHERE username='".mysqli_real_escape_string($link, strtolower($_POST["username"]))."'";

        if ($result = mysqli_query($link, $query)) {
            $user = mysqli_fetch_array($result);
            if ($user['password']===md5(md5($user['username']).$_POST["password"])) {
                setcookie("customer", $user['username'], time() + 60 * 60 *24);
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }



 ?>
