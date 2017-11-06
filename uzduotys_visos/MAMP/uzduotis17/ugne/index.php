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
    // paiimame pirma vartotoja is viso obj
    // $temp_user = mysqli_fetch_assoc($all_users);
    // echo "<h2>Varototojo nr.:" . $temp_user["id"] . "  (". $temp_user["rights"] . ") </h2>";
    //
    // $temp_user = mysqli_fetch_assoc($all_users);
    // echo "<h2>Varototojo nr.:" . $temp_user["id"] . "  (". $temp_user["rights"] . ") </h2>";
    //
    // $temp_user = mysqli_fetch_assoc($all_users);
    // if ( $temp_user != NULL ) {
    //     echo "<h2>Varototojo nr.:" . $temp_user["id"] . "  (". $temp_user["rights"] . ") </h2>";
    // }

    // ARBA gudriau su while
   $temp_user = mysqli_fetch_assoc($all_users);
   if ( $temp_user != NULL ) :
    while ($temp_user) :
        /*echo "<h2>Varototojo nr.:" . $temp_user["id"] . "  (". $temp_user["rights"] . ") </h2>";
        echo "<h3>Vardas " . $temp_user["username"] . " slaptazodis:  **** </h3>";*/
     
        //$kelias = $_SERVER['REQUEST_URI'];
        //echo "kelias : $kelias <br/>";
        
        ?>
        
        <a href="user.php?id=  <?php   echo $temp_user["id"]; ?> ">
        
        <?php echo $temp_user["username"]; ?>
        
        </a>
<!--kursim mygtuka useriu tryinimui-->
       <a href="delete_user.php?id=<?php echo $temp_user["id"];?>">
       <button>DELETE user</button>
       </a>
        <br/>
        
        
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
 


    </body>
</html>
