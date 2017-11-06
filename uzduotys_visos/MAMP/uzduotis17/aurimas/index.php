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


            $all_users = getUsers();
            $temp_user = mysqli_fetch_assoc($all_users);
            if($temp_user != NULL) {
                while($temp_user){
                    echo "<h2>Vartotojo nr. : " . $temp_user['id'] . "  (" . $temp_user['rights'] . ") </h2>";
                    echo "<h>Vartotojo nr. : " . $temp_user['username'] . "  ,Passwordas: ****</h>";
                    echo "<hr />";
                    $temp_user = mysqli_fetch_assoc($all_users);
                }
            }


         ?>

    </body>
</html>
