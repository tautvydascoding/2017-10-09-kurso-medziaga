<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Mokomes php SQL pritaikymo</h1>
        <?php
            include('./db_funkcijos.php');
            include('./db_funkcijos2.php');


            $all_users = getUsers();
            $temp_user = mysqli_fetch_assoc($all_users);
            if($temp_user != NULL) {
                while($temp_user){
                    ?>
                    <a href="user.php?id=<?php echo $temp_user["id"]; ?>">
                        <?php echo $temp_user["username"]; ?>
                    </a>

                    <a href="delete-user.php?id=<?php echo $temp_user["id"]; ?>">
                        <button> Delete User </button>
                    </a>
                    <?php
                    echo "<hr />";
                    $temp_user = mysqli_fetch_assoc($all_users);
                }
            }


         ?>

    </body>
</html>
