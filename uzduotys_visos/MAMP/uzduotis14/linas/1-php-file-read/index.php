<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      echo "<h1>Mokomes PHP skaityti failus</h1>";


      $duomenuFailas = fopen("./prekiu_duomenys.txt", "r") or die("prekiu_duomenys.txt toks failas nerastas.");
          // feof = tikrina ar dabartine failo eilute yra paskutine
      //
      // while ( !feof($duomenuFailas) ) {
      //   $eilute = fgets($duomenuFailas);
      //   echo $eilute . "<br />";
      // }
      // fclose($duomenuFailas);




//uzduotis 1

            // while ( !feof($duomenuFailas) ) {
            //   $eilute = fgets($duomenuFailas); // fgets - paima vis sekancia eilute
            //   $prekeDuomenys = explode(" : ",$eilute);
            //   // print_r($prekeDuomenys);
            //   echo "<h2> " . $prekeDuomenys[0] . " </h2>";
            //
            //   echo "<h3> " . $prekeDuomenys[1] . " </h3>";
            //
            //   echo "<button class='bg-info'> " . $prekeDuomenys[2] . " </button> <hr />";
            //
            // }
            // fclose($duomenuFailas);




//Array ( [0] => Raudonas dviratis [1] => 1 vnt [2] => 369eur )
//uzduotis 2
$matrica= array();//globalus masyvas
while ( !feof($duomenuFailas) ) {
  $eilute = fgets($duomenuFailas); // fgets - paima vis sekancia eilute
  $preke = explode(" : ",$eilute);
  array_push( $matrica, $preke);

}

for ($i=0; $i < sizeof($matrica) ; $i++) {
   echo "<h2> " . $matrica[$i][0] . " </h2>";
   echo "<h3> " . $matrica[$i][1] . " </h3>";
   echo "<button> " . $matrica[$i][2] . " </button> <hr />";


}
fclose($duomenuFailas);// uzdaro kai visas eilutes buna paimtos fgets funkcija.

// kitas variantas

// $visosPrekes = array();
// while ( !feof($duomenuFailas) ) {
//   $eilute = fgets($duomenuFailas); // fgets - paima vis sekancia eilute
//   $prekeDuomenys = explode(" : ",$eilute);
//   $visosPrekes[$i] = $prekeDuomenys;
//   $i++;
//
//
// }
//
// for ($i=0; !feof($duomenuFailas ; $i++) {
//   $eilute = fgets($duomenuFailas);
//   $prekeDuomenys = explode(" : ",$eilute);
//   $visosPrekes[$i] = $prekeDuomenys;
//
// }
// fclose($duomenuFailas);








     ?>

  </body>
</html>
