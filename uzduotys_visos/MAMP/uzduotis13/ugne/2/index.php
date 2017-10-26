<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mokomes php</title>
    </head>
    <body>
         <?php
                
            echo "<h1>Mokomes PHP foreach ciklu</h1>";
        
            $ezeras = "Vistytis";
            $zuvis = "lydeka";
            $skaicius = "devyniu";
            printf("Uz %s juru ir 5 kalnu yra ezeras %s, kuriame gyvena %s", $skaicius, $ezeras, $zuvis);
        
        //susikurti array
        $cars = array("Audi", "Opel", "BMW", "Mercedes");
        
        //for(i=0; $i< ; $i++) {} arba
        foreach ($cars as $car) { //isgalvotas kintamasis, daznai "key" ir yra naudojamas vis skirtingam stalciui;
                echo $car . "<br />";
            //norint nutraukti cikla reiktu naudoti if ir nutraukti kai raisme opel; tai eiskosime "opel"
                if ($car == "Opel") {
                    break;
                }     
        }
        
        //UZD 2
        //atspaudinti masinas isskyrus BMW (naudoti "continue")
        foreach ($cars as $car) {
                echo $car . "<br />";
            //norint nutraukti cikla reiktu naudoti if ir nutraukti kai raisme opel; tai eiskosime "opel"
                if ($car == "BMW") {
                    continue; //nutraukia etapa kuriame yra, prasoka ir vykdo toliau;
                } 
            echo $car . "<br/>";
        }
        
        
        //naujas array
        $uzsakymai = array("", "", "150 morku", "", "20kg bananu");
        foreach ($uzsakymai as $uzsakymas) {
                if (strlen($uzsakymas) == 0) {
                    continue;
                }
            echo "jusu uzsakymas: " . $uzsakymas . "<br/>";
        }
        
        
        //ASOCIATYVUS MASYVAI, stalciai su pavadinimais
        $darbutojai = array("name"=>"Ona", "lname"=>"Onaite", "kodas"=>"125");
        //tinka kai ieskai specifinio dalyko;
        echo "darbutojo kodas" . $darbutojai['kodas'] . "<br/>";
        
        foreach($darbuotojai as $value) {
            echo $value . "<br/>";
        }  
        
        
       ?>
         
    </body>
</html>
