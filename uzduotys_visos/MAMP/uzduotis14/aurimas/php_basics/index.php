<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>php basics</title>
    </head>
    <body>
        <?php
            printf("<h1> Mokomes %s basics %s</h1>", "PHP", "2");

            $name = "    Tim";
            echo $name . "<br>";
            $istaisytasVardas = trim($name);
            echo $istaisytasVardas . "<br>";
            echo "<br />";

            // static kintamieji

            function skaitliukas(){
                static $skaicius = 0;
                echo $skaicius . "<br />";
                $skaicius++;
            }

            skaitliukas();
            skaitliukas();
            skaitliukas();

            function skaiciuotiIki20 (){
                static $skaicius = 0;
                $skaicius++;
                echo "skaicius: $skaicius <br>";

                if($skaicius <= 20){
                    skaiciuotiIki20();
                }
                echo "testas ";
            }

            skaiciuotiIki20();
         ?>
    </body>
</html>
