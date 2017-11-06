<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Mokomes PHP MySQL pritaikymas</h1>

    <?php
      include('./DB_Function.php');

      $all_users = getUsers();

      // print_r($GLOBALS);


      $temp_user = mysqli_fetch_assoc($all_users);
      if ($temp_user !=NULL) {
        while ($temp_user) {
          // echo "<h3>Vartotojo nr. : " . $temp_user["id"] . "</h3>";
          // echo "<h3>Vartotojo Vardas: " . $temp_user["username"] . " </h3> <hr />";
          // <a href="http://localhost/uzduotis17/linas/1-php-MySQL-pritaikymas-2dalis/"></a>
          // $kelias = $_SERVER['REQUEST_URI'];
          // echo "kelis: $kelias <br />";
          ?>
          <a href="user.php?id=  <?php echo $temp_user["id"];?>">
            <?php echo $temp_user["username"]; ?>
          </a>
          <a href="delete.php?id= <?php echo $temp_user["id"];?>">
          <button>Delete user</button>
          </a>
          <br />
          <?php
          $temp_user = mysqli_fetch_assoc($all_users); // vis sekanti paima
        }
      }



     ?>

  </body>
</html>
