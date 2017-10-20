console.log("labas vakaras");


// js saugosime mokinio informacija:
// 	mokinio: vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)


var mokinys = {
    name : "Tomas",
    lname : "janka",
    klase : 7,
    pazymiai : [6, 5, 9, 10, 8],
    test : {
        data: 999
    }
};
console.log(mokinys.test.data);

// Uzdavinys:
// 1) isvesti i console mokinio informacija.
console.log("vardas:", mokinys.name);
console.log("vardas:", mokinys.lname);
console.log("vardas:", mokinys.klase);
console.log("vardas:", mokinys.pazymiai.join(" * "));
// 2) pasirasyti funkcija, kuri is duotu 5 pazymiu, grazintu ju vidurki

function rastiVidurki () {
    var suma = 0;
    for (var i = 0; i < mokinys.pazymiai.length; i++) {
        sume = suma + mokinys.pazymiai[i];  // suma += mokinys.pazymiai[i];
    }
    var vidurkis = suma / mokinys.pazymiai.length;
    return vidurkis;
}
var vidurkis = rastiVidurki();
console.log(mokinys.name + " vidurkis yra " + vidurkis);

// universalus, sakiciuojame vidurki bet kuriam masyvui

function rastiVidurkiUniversalus (grades) {
    var sum = 0;
    for (var i = 0; i < grades.length; i++) {
        sum += grades[i];
    }
    return sum / grades.length;
}
var vidurkis2 = rastiVidurkiUniversalus(mokinys.pazymiai);
console.log(mokinys.name + " vidurkis yra " + vidurkis2);



var salyga = true;
salyga = false;
salyga = 0;
if (salyga) {
    // code
} else {

}


// 1
var tevas = {
    name : "Tim",
    lname : "Kirkor",
    vaikas : {}
};

var vaikas = {
    name : "Jonas",
    klase : 7
};

tevas.vaikas = vaikas;
tevas.vaikas2 = vaikas; // objekte sukureme nauja kintamaji "vaikas"
tevas.namas = 6;        // objekte sukureme nauja kintamaji "vaikas"

console.log("tevas:", tevas);




var person = [];
person["firstName"] = "John";
person["lastName"] = "Doe";
person["age"] = 46;
//
