console.log("labas vakaras");




//ciklas, kol kazkas pasikeis;


/*var vestuves = true;

while (vestuves) {
    console.log ("muziakntai groja"); //iki begalybes, amzinas ciklas
    if (vestuves == false) {
        break; //return;
    }
    vestuves = false;}*/

//masyvas 50, uzpildytas atsitiktiniais skaiciais 10-100
//random funkcija



function generuotiSkaiciuNuo10iki100() {
var randomNumber = Math.random();   
/*tobulinam, didinam iki dvizenkliu*/ randomNumber = randomNumber * 90+10;
/*remove decimals*/ randomNumber = Math.round(randomNumber);
return randomNumber; //sitas LABAI svarbus, reiksme atsiras ten kur iskvietem funkcija;
}
/*console.log("atsitiktinis skaicius:", randomNumber);*/
//db turim sk nuo 1, reikia nuo 10
/*tai vietoj 100 = *90+10*/


//kuriam masyva
var detales = [];
/*var randomNumber = Math.random();
randomNumber = randomNumber * 100;
randomNumber = Math.round(randomNumber);*/

for (var i=0; i<50; i++) {
    detales [i] =generuotiSkaiciuNuo10iki100();
}
//uzpildem nuliais; o dabar galim uzpildyti skaiciais;
console.log("detales", detales);

/*----------------------------*/

//isvesti visus elementus for cikla naudojant i console
for (var i=0; i<detales.length; i++) {
    detales [i] =generuotiSkaiciuNuo10iki100();
}
console.log("detales", detales);
//pakeisti atsitiktinius skaicius, kurie lyginiai i zodzius "lyginis"
console.log(detales.length);
for (var i=0; i<detales.length; i++) {
    console.log(i);
    if (i%2 ===0) {
            detales [i] = "lyginis";
        }
}
console.log ("detales", detales);

