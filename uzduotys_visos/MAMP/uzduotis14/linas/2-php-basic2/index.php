<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    printf("<h1>MOkomes %s basics %s </h1>", "PHP","2");

    $name = "  Tim ";
    echo $name . "<br />";
    $istaisytasVardas = trim($name); //trim pasalina tarpus aplink zodzius, tarp zodziu tarpu nesalina.
    echo $istaisytasVardas . "<br />";

    // print_r($GLOBALS);

//  Static kintamieji

function skaitliukas(){
   Static $skaicius = 0; //static - paverte "skaiciu" globaliu
  echo $skaicius . "<br />";
  $skaicius++;
}
skaitliukas();
skaitliukas();
skaitliukas();

// rekursija

function skaiciuotiIki20(){
  Static $sk = 0;
  $sk++;


  if ( $sk <= 20) {
    echo "skaicius: $sk <br />";
    skaiciuotiIki20();
  }
  echo "testas";
}
skaiciuotiIki20();




     ?>
  </body>
</html>
