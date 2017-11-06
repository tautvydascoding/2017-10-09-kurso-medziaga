<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Jusu vartotojo info</h1>

    <?php
      include('./DB_Function.php');

      print_r($_GET);

      // http://localhost/uzduotis17/linas/1-php-MySQL-pritaikymas/user.php?id=2
      $nr = $_GET['id'];
      $vartotojas = getUser($nr);


      ?>

      <h2>Vartotojo vardas: <?php echo $vartotojas['username']; ?></h2>
      <h4>Vartotojo el.pastas: <?php echo $vartotojas['email']; ?></h4>
      <h4>Vartotojo slaptazodis: <?php echo $vartotojas['pass']; ?></h4>
  </body>
</html>
