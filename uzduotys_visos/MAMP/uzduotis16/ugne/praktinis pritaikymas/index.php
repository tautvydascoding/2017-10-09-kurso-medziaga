<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Praktinis pritaikymas</title>
    </head>

    <body>
       <h1>Mokomes php</h1>
        <?php
            include('./db_functions.php');
            //paimme pirma vartotoja
            $all_users = getUsers();
            $temp_user = mysqli_fetch_assoc($all_users);
        
        /*if($temp_user !=NULL) {
            echo "<h2>Vartotojo nr. :" . $temp_user["id"] . "(" . $temp_user["rights"] . ")<h2/>";
        }*/
        
        //ARBA gudriau su while;
        if($temp_user !=NULL) {
            while($temp_user) {
                echo "<h2>Vartotojo nr. :" . $temp_user["id"] . "(" . $temp_user["rights"] . ")<h2/>";
                echo "<h3>Vardas :" . $temp_user["username"] . "(" . $temp_user["pass"] . ")<h3/>";
                echo "<h3>Email :" . $temp_user["email"] . ")<h3/>";
                $temp_user = mysqli_fetch_assoc($all_users);
            }
        }
        ?>
    </body>
</html>

 