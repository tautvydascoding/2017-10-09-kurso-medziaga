<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php echo "<h1>Mokomes skaityti faila</h1><br>";
        $prekiuEilutes = array();
        $duomenuFailas = fopen("./prekiu_duomenys.txt", "r") or die ("prekiu_duomenys.txt toks failas nerastas");
        while(!feof($duomenuFailas)){
            $failoEilute = fgets($duomenuFailas);
            $prekesDuomenys = explode(":", $failoEilute);
            array_push($prekiuEilutes, $prekesDuomenys);
        }

        for($i = 0; $i < sizeof($prekiuEilutes); $i++){
            echo "<h2>" . $prekiuEilutes[$i][0] . "</h2>";
            echo "<h3>" . $prekiuEilutes[$i][1] . "</h3>";
            echo "<button>" . $prekiuEilutes[$i][2] . "</button>";
            echo "<hr>";
        }
        fclose($duomenuFailas);
        ?>
    </body>
</html>
