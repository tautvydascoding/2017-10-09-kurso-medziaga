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
        
            echo "<h1>Mokomes PHP skaityti failus</h1>";
            
            $duomenuFailas = fopen("./duomenys.txt", "r") or die ("duomenys.txt - failas nerastas");//die nutraukia viso kodo vykdyma; gerai iekso klaidu;
             
                //feof - tikrina ar dabartineje eiluteje yra simbolis kuris yra failo pabaiga;
                // ! - tikimes priesingos reiksmes;
           /* while ( !feof($duomenuFailas)) {
                //pasiimti eilutems reikia specialios komandos;
                $eilute = fgets($duomenuFailas); // <-si funkcija paima vis sekancia eilute;
                //galima arba det eilute i skirtingus masyvus arba bandyti atspausdinti;
                //echo $eilute . "<br/>";
                
                $prekesDuomenys = explode(":", $eilute);
                
                /*print_r($prekesDuomenys);
                break;*/
                
               /* echo "<h2>" . $prekesDuomenys[0] . "</h2>";
                echo "<h3>Kiekis" . $prekesDuomenys[1] . "</h3>";
                echo "<button type='submit'>" .$prekesDuomenys[2] . "</button><br/>";
            }
            fclose($duomenuFailas);*/
        
    
                
        
        
        
        
        //naudoti 2 ciklus; pirmuoju sudedam i masyva; anntruoju atspausidnti;
                
                $visosPrekes = array();
                $i=0;
        
                while ( !feof($duomenuFailas)) {
                
                     $eilute = fgets($duomenuFailas);
                     $prekesDuomenys = explode(":", $eilute);
                    //1 sprendimas, sukurti globalu kintamaji;
                    
                     $visosPrekes[$i] = $prekesDuomenys[$i];
                     $i++;
                    
                    //per array_push komanda; 
                    //array_push($visosPrekes, $prekesDuomenys);
                
                }
        
         //sprendimas: per for cikla; BET SALYGA: tikrinam ar nesibaigia failas; 
                     for ($i=0, !feof($duomenuFailas, $i++) {
                     
                     $eilute = fgets($duomenuFailas);
                     $prekesDuomenys = explode(":", $eilute);
                    
                     $visosPrekes[$i] = $prekesDuomenys;
                     }
                          
                          
                fclose($duomenuFailas);
                
            //DABAR SPAUSDINAM 
            foreach ($visosPrekes as $preke) {
                echo "<h2>" . $preke[0] . "</h2>";
                echo "<h3>Kiekis" . $preke[1] . "</h3>";
                echo "<button type='submit'>" .$preke[2] . "</button><br/>";
            }
        
            
        ?>
    
    </body>
</html>

         