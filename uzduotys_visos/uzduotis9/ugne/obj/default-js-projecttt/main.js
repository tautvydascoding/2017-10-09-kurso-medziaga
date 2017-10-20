console.log("labas vakaras");

// PASIKARTOTI 
// js saugosime mokinio informacija: 
// 			mokinio vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8) 

var mokinioInfo = {
   name: "Jonas",
   lname: "Radvenskas",
   form: 12,
   mathGrades: [6, 5, 9, 10, 8]
};

// Uzdavinys: 
// 1) isvesti i console mokinio informacija. 

console.log ("mokinio info", mokinioInfo);
console.log ("vardas", mokinioInfo.name);
console.log ("pavarde", mokinioInfo.lname);
console.log ("klase", mokinioInfo.form);
console.log ("pazymiai matematikos", mokinioInfo.mathGrades.join(" * "));

// 2) pasirasyti funkcija, kuris is duotu 5 pazymiu, grazintu ju vidurki

function rastiVidurki () {
    var suma = 0;
    for (var i=0; i<mokinioInfo.mathGrades.lenght; i++) {
        suma = suma + mokinioInfo.mathGrades[i];
    }
    
    var vidurkis = suma/mokinioInfo.mathGrades[i];
    return vidurkis;
}

var vidurkis = rastiVidurki();

console.log(mokinioInfo.name + "Vidurkis yra" + vidurkis);

//universalus budas

function rastiVidurkiUniversalus (grades) {
    var suma = 0;
    for (var i=0; i<grades.length; i++) {
        suma += grades[i];
    }
    return suma/grades.lenght;
}
 var vidrukis2 = rastiVidurkiUniversalus(mokinioInfo.mathGrades);
 console.log(mokinioInfo.name + "vidurkis yra" +vidrukis2);


// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas

 var tevas = {
    vardas: "Tomas",
    pavarde: "Janauskas",
    vaikas: {}
};

var vaikas = {
        vardas: "Tomukas",
        klase: 7,
};
// 3) priskirti tevo objekui (kintamajam) vaika
tevas.vaikas = vaikas;
    
console.log("Tevas", tevas);