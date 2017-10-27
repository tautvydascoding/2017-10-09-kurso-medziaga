<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mokomes PHP</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
</head>
    <body>
        
        <?php
        
            printf ("<h1>Mokomes PHP </h1>");
            
            $name = '  Tim  ';
            echo $name . "<br/>";
            $fixspace = trim($name); //trim- pasalina tarpus abipus zodzio;
            echo $name . "<br/>";
        
        //globalios reiksmes   
       /*print_r ($GLOBALS);*/
        
        //static variables:
        function skaitliukas() {
            static $skaicius = 0; //padarius statiska reiksme, kompiuteris jos neskaito, todel skaicius dides;
            echo $skaicius . "<br/>";
            $skaicius++;
            
        }
         
        skaitliukas();
        skaitliukas();
        skaitliukas();
            
        //rekursijas - funkcija funkcijoje
        
        
        function skaiciuotiIki20 () {
            static $skaicius2 = 0; 
            skaicius2++;
            
            
            if($skaucius <= 20) {
                echo "skaicius:" . skaicius2 "<br/>";
                skaiciuotiIki20();
            }
        }
        
    skaiciuotiIki20();

        
        
        
        
        

        ?>
    
    </body>
</html>

         