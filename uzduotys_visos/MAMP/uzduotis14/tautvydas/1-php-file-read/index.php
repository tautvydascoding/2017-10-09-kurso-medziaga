<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <?php
            echo "<h1>MOkomesPHP skaityti failus</h1>";

            // $duomenuFailas = fopen("./prekiu_duomenys.txt", "r") or die(" prekiu_duomenys.txt toks failas nerastas, tikriausiai nurodete bloga kelia");

            // feof - tikrina ar dabartine failo eilute yra paskutine
            // while ( !feof($duomenuFailas)) {
            //      $eilute = fgets($duomenuFailas);
            //      echo $eilute . "<br />";
            // }
            // fclose($duomenuFailas);


            // uzduotis 1:
            // nuskaityta failo eilute sudeti i masyva ir atvaizduoti
            // <h2> Prekes pavadinimas</h2>
            // <h3> "Siuo metu turime:" xx vnt </h3>
            // <button> XX eur </button>

            // uzduotis 2:
            // uzduoti 1 isspresti naudojant 2 ciklus:
            // pirmas ciklas skirtas prekes susideti i masyva (matrica)
            // antras ciklas skirtas prekes atspausdinti


            // uzduotis 1
            // while ( !feof($duomenuFailas)) {
            //      $eilute = fgets($duomenuFailas); //  fgets - nuskaito vis sekancia failo eilute!!
            //      $prekesDuomenys = explode(" : ", $eilute);
            //
            //     //  print_r($prekesDuomenys);
            //     echo "<h2>  " . $prekesDuomenys[0] . "</h2>";
            //     echo "<h3>  " . $prekesDuomenys[1] . "</h3>";
            //     echo "<button>  " . $prekesDuomenys[2] . "</button>";
            //     echo "<hr />";
            // }
            // fclose($duomenuFailas);


            // uzduotis 2
            $duomenuFailas = fopen("./prekiu_duomenys.txt", "r") or die(" prekiu_duomenys.txt toks failas nerastas, tikriausiai nurodete bloga kelia");

            $visosPrekes = array();
            $i = 0;
            // while ( !feof($duomenuFailas)) {
            //      $eilute = fgets($duomenuFailas); //  fgets - nuskaito vis sekancia failo eilute!!
            //      $prekesDuomenys = explode(" : ", $eilute); // local
            //     //  $visosPrekes[$i] = $prekesDuomenys;
            //      array_push($visosPrekes, $prekesDuomenys );
            //      $i++;
            // }
            // ARBA
            for ($i=0; !feof($duomenuFailas)  ; $i++) {
                $eilute = fgets($duomenuFailas); //  fgets - nuskaito vis sekancia failo eilute!!
                $prekesDuomenys = explode(" : ", $eilute); // local
                $visosPrekes[$i] = $prekesDuomenys;
            }
            fclose($duomenuFailas);

            echo "antros prekes kaina:". $visosPrekes[1][2] . " <br />";

            foreach ($visosPrekes as $preke) {
                    echo "<h2>  " . $preke[0] . "</h2>";
                    echo "<h3>  " . $preke[1] . "</h3>";
                    echo "<button>  " . $preke[2] . "</button>";
                    echo "<hr />";
            }
         ?>

    </body>
</html>
