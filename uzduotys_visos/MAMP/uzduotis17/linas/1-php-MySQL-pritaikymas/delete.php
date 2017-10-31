<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('./DB_Function.php');

      $id = $_GET['id'];
      deleteUser($id);
      echo "Vartotojas nr:  $id istrintas <br />";




    ?>


  </body>
</html>
