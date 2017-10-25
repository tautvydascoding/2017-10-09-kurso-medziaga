console.log("labas vakaras");
 // masyvas 50
 // atsitiktiniais sk nuo 10-100



 function sugeneruokSkaiciuNuo10iki100() {
   var atsitiktinisSkaicius = Math.random();
   atsitiktinisSkaicius = atsitiktinisSkaicius * 90 + 10;
   // =* same
   atsitiktinisSkaicius = Math.round( atsitiktinisSkaicius);
   // console.log("atsitiktinis: ", atsitiktinisSkaicius);
   return atsitiktinisSkaicius; //coppy
 }
 sugeneruokSkaiciuNuo10iki100();

 var detales = []; // susikuriu tuk viena karta
 for (var i = 0; i < 50; i++) {
    detales[i] = sugeneruokSkaiciuNuo10iki100();// paste.uzpildau kiekviena stalciu/elementa
 }
 // console.log("x: ", detales);
// 2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginiai i zodi "lyginis"
 for (var i = 0; i < detales.length; i++) {
    // tikriname ar lyginis!!!!
    if (( detales[i] % 2) == 0){
      detales [i] = "lyginis";
   }
 }
 console.log(detales);
