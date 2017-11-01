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

      // echo "<h2>Vartotojo nr.: " . $temp_user["id"] . "(".$temp_user["email"] . ")</h2>";

      $temp_user = mysqli_fetch_assoc($all_users);
      if ($temp_user !=NULL) {
        while ($temp_user) {
          echo "<h2>Vartotojo nr. : " . $temp_user["id"] . ', ' . 'el.pastas - ' . "(".$temp_user["email"] . ")</h2>";
          echo "<h3>Vartotojo Vardas: " . $temp_user["username"] . ', ' . 'slaptazodis -' ."(". '****' . ")</h3> <hr />";
          $temp_user = mysqli_fetch_assoc($all_users); // vis sekanti paima
        }
      }









     ?>

  </body>
</html>
