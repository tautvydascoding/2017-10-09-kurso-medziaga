<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            include('./db_functions.php');

            $id = $_GET['id'];
            deleteUser($id);
            echo "vartotojas nr: $id istrintas <br />" ;  
        ?>

    </body>
</html>
