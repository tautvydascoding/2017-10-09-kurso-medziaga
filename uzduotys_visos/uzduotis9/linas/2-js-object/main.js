console.log("labas vakaras");


var mokinys = {
  name: "tadas",
  lname : "dobilas",
  klase : 7,
  pazymiai : [6, 5, 9, 10, 8]

};
//Uzdavinys:
//1) isvesti i console mokinio informacija.
console.log("Informacija: ", mokinys.name);
console.log("Informacija: ", mokinys.lname);
console.log("Informacija: ", mokinys.klase);
console.log("Informacija: ", mokinys.pazymiai.join("*"));

//2) pasirasyti funkcija, kuris is duotu 5 pazymiu, grazintu ju vidurki

function rastiVidurki() {
  var suma = 0;
  for (var i = 0; i < mokinys.pazymiai.length; i++) {
   suma += mokinys.pazymiai [i];
  }
  var vidurkis = suma / mokinys.pazymiai.length;
  return vidurkis;
}
var vidurkis = rastiVidurki();
console.log(mokinys.name + "vidurkis yra" + vidurkis);

// universalus skaiciuojant vidurki masyve
//
// function rastiVidurki (grades) {
//   var sum = 0;
//   for (var i = 0; i < grades.length; i++) {
//      sum += grades[i];
//   }
//   return sum / grades.length;
//
// }
// var vidurkis2 = rastiVidurki(mokinys.pazymiai);
// console.log(mokinys.name + "vidurkis yra" + vidurkis2);

var tevas = {
  name : "tim",
  lname : "kirkor",
  vaikas : {}
};

var vaikas = {
  name : "ben",
  klase : 7
};

tevas.vaikas = vaikas;

console.log("tevas: ", vaikas);
