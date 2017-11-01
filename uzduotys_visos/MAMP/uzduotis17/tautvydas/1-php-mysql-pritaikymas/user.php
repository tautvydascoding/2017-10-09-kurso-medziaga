<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Jusu vartojo info</h1>


        <?php
         include('./db_functions.php');

         print_r($_GET);
 
        // http://localhost:8888/uzduotis17/tautvydas/1-php-mysql-pritaikymas/user.php?id=2
         $nr = $_GET['id'];
         $vartotojas = getUser($nr);

         ?>
         <h2>Vartoto vardas:  <?php echo $vartotojas['username'];  ?> </h2>
         <h4>Vartoto email:  <?php echo $vartotojas['email'];  ?> </h4>
         <h4>Vartoto rights:  <?php echo $vartotojas['rights'];  ?> </h4>



    </body>
</html>
