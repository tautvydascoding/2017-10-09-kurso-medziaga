console.log("labas vakaras");

// js saugosime mokinio informacija:
// 			mokinio vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
  name : "Tomas",
  surname : "Petraitis",
  klase : 3,
  pazymiai : [6, 5, 9, 10, 8]
};

// 1) isvesti i console mokinio informacija.

console.log("vardas: ", mokinys.name);
console.log("pavardes: ", mokinys.surname);
console.log("klase: ", mokinys.klase);
console.log("pazymiai: ", mokinys.pazymiai.join(" * "));
// 2) pasirasyti funkcija, kuris is duotu 5 pazymiu, grazintu ju vidurki
function isvestiVidurki () {
  var suma = 0;
    for (var i = 0; i < mokinys.pazymiai.length; i++) {
    suma = suma+ mokinys.pazymiai[i];
  }
  var vidurkis = suma / mokinys.pazymiai.length;
  return vidurkis;
}
var vidurkis = isvestiVidurki();
console.log(mokinys.name + " vidurkis yra " + vidurkis);

// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
  name : "Timas",
  surname : "Jonaitis",
  vaikas : {}
};

var vaikas = {
  name : "Timukas",
  klase : 7
};

tevas.vaikas = vaikas;
tevas.vaikas2 = vaikas;
console.log("tevas: ", tevas);
