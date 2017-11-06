<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Praktinis pritaikymas</title>
    </head>

    <body>
       <h1>Jusu info</h1>
        <?php
            include('./db_functions.php');
            //paimme is globalaus masyvo get reiksme, su situo ivedus i url id, ismes butent ta varttoja;
            print_r($_GET);
            //reikia pasileisti users.php failal/;
            $nr = $_GET['id']; //id = kazkoks sk, veiks tik ivedus ji i url;
            //http://localhost/uzduotys_visos/MAMP/uzduotis16/ugne/praktinis%20pritaikymas/user.php?id=2;
        $vartotojas = getUser($nr);
        ?>
        <h2>vartot.vardas: <?php echo $vartotojas['username']; ?></h2>
        <h2>vartot.pastas: <?php echo $vartotojas['email']; ?></h2>
        <h2>vartot.teises: <?php echo $vartotojas['rights']; ?></h2>
    </body>
</html>

 