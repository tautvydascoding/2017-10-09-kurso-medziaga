<?php
    include("./db_functions.php");

    $istorija = getIstorija($_GET['nr']);
    echo json_encode($istorija);
 ?>
