<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Jusu vartotojo informacija</h1>

        <?php
        include('./db_funkcijos.php');
        print_r($_GET);
http://localhost:8888/GITHUBmedziaga/uzduotys_visos/MAMP/uzduotis17/aurimas/user.php?id=2


        $nr = $_GET['id'];
        $vartotojas = getUser($nr);
         ?>
         <h2>Vartotojo vardas <?php echo $vartotojas['username']; ?></h2>
         <h3>Vartotojo email <?php echo $vartotojas['email']; ?></h3>
         <h4>Vartotojo rights <?php echo $vartotojas['rights']; ?></h4>
    </body>
</html>
