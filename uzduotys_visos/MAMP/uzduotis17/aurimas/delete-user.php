<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            include("./db_funkcijos.php");

            $id = $_GET['id'];
            deleteUser($id);
            echo "Vartotojas nr." . $id . " istrintas";
         ?>

    </body>
</html>
