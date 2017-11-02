<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>MOkomes PHP MYsql pritaikymo</h1>

<?php
    include('./db_functions.php');

    $all_users = getUsers();


    // print_r($GLOBALS);

    // ARBA gudriau su while
   $temp_user = mysqli_fetch_assoc($all_users);
   if ( $temp_user != NULL ) :
        while ($temp_user) :
            // <a href='http://localhost:8888/uzduotis17/tautvydas/2-php-mysql-pritaikymas-home/'
            // $kelias = $_SERVER['REQUEST_URI'];
            // echo "kelias: $kelias <br />";
            ?>

            <a href="user.php?numeris=  <?php  echo $temp_user["id"]; ?> ">
                    <?php   echo $temp_user["username"]; ?>
             </a>

             <a href="delete_user.php?id=<?php echo $temp_user["id"]; ?>">
                 <button>Delete user</button>
             </a>
 

            <!--
            <a href="user.php?id=1 ">
                    Tomas Molauskas
             </a>
            -->
             <br />

            <?php
            $temp_user = mysqli_fetch_assoc($all_users);
        endwhile;
    endif;



// FORM

// <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>

<!-- if (empty($_POST["name"])) {
  $nameErr = "Name is required";
} else {
  $name = test_input($_POST["name"]));
}

 -->


<!-- function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} -->
 ?>


    </body>
</html>
