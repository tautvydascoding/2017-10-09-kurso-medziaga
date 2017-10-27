<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>PHP</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <h1>PHP file read</h1>
        <?php

        $duomenuFailas = fopen('./prekiu_duomenys.txt', "r") or die("Failas nerastas");
        $prekes=array();

        while (!feof($duomenuFailas)) { // Tikrina ar paimta eilute yra paskutine, find end of file
            $eilute = fgets($duomenuFailas);
            $preke = explode(" : ", $eilute);
            array_push($prekes, $preke);

        }
        fclose($duomenuFailas);


        print_r($prekes);

        ?>

        


    </body>
</html>
