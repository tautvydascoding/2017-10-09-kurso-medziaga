console.log("labas vakaras");


// masyvas 50
// kuris uzpildytas atsistiktiniais sk nuo 10-100





function sugeneruokSkaiciuNuo10iki100() {
    var atsitiktinisSkaicius = Math.random();
    atsitiktinisSkaicius = atsitiktinisSkaicius * 90 + 10;
    // atsitiktinisSkaicius *= 100;
    atsitiktinisSkaicius =  Math.round( atsitiktinisSkaicius );
    return atsitiktinisSkaicius; // sita reiksme atsiras ten, kur iskveitem f-ja "sugeneruokSkaiciuNuo10iki100()"
}
var detales = []; // susikuriu tik viena karta
for (var i = 0; i < 50; i++) {
    // detales[i] = 0;  // uzpildau kiekviena stalciu/elementa
    detales[i] = sugeneruokSkaiciuNuo10iki100(); //
}
console.log(detales);

// 2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginiai i zodi "lyginis"
// naudojant for cikla, isvesti visus masyvo elemntus i console
for (var i = 0; i < detales.length; i++) {
    var skaicius = detales[i];
    // tikriname ar lyginis
    if ( skaicius % 2 === 0 ) {
            detales[i] = "lyginis";
    }
}

//=============
