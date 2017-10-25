<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>foreach</title>
    </head>
    <body>


        <?php
echo "php for each <br />";
$ezers = "gilus labai ";
$zuvis = "pleksniuke";
$paukstis = "pauktis plasnininkas";
printf("buvo %s  labai ezers %s, gilus %s <br /><br />" ,$ezers ,$zuvis, $paukstis);
////
//issigalvotas kintamasis $masina. kiekviena kart bus lygus vis kitam stalciui
$masinos = array("audi", "zap", "opel", "gaz", "vaz");
foreach ($masinos as  $masina) {
    echo $masina . "<br />";

    if ($masina == "opel") {
        break;
        # code...
    }
}
foreach ($masinos as $masi) {
    if ($masi == "opel") {
        continue;
    }
    echo $masi . "<br />";
}

$uzsakymai = array("", "", "morkos 100", "" , "bananu 50" , "kopustu 15");


foreach ($uzsakymai as $uzsak) {
    if (strlen($uzsak) == 0) {
        continue;
    }
    echo "uzsakymas: " . $uzsak . "<br />";
};

$darbuotojai = array ("name" => "vardas", "lname" => "pavardas", "kodas" => 123);
echo "darbininko kodas: " . $darbuotojai["kodas"] . "<br  />";
foreach ($darbuotojai as $dam) {
    echo $dam . "<br />";
}







         ?>

    </body>
</html>
