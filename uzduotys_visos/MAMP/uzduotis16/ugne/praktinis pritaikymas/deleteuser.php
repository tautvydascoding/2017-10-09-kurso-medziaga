<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Praktinis pritaikymas</title>
    </head>

    <body>
       <h1>istrinti vartotoja</h1>
        <?php
            include('./db_functions.php');
            //paimme is globalaus masyvo get reiksme, su situo ivedus i url id, ismes butent ta varttoja;
        
            $id= $_GET['id'];
            deleteUser($id);
            echo "vartotojo nr:" $id "istrintas <br?>";
            print_r($_GET);
            //reikia pasileisti users.php failal/;
            $nr = $_GET['id']; //id = kazkoks sk, veiks tik ivedus ji i url;
            //http://localhost/uzduotys_visos/MAMP/uzduotis16/ugne/praktinis%20pritaikymas/user.php?id=2;
        $vartotojas = getUser($nr);
        ?>
    </body>
</html>

 