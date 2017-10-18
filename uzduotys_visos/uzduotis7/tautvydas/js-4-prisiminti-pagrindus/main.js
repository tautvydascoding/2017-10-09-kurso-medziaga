console.log ("Labas");


// 1A
// global
var vardas,
    pavarde,
    klase;
// 1B
    vardas = "Liepa"
    pavarde = "Lokotaite"
    klase = 6;
// 1C
    console.log("Vardas: " + vardas);
    console.log("Pavarde: " + pavarde);
    console.log("kalse: " + klase);

function spausdinti() {
    var catName = "aguona"; // local
    console.log("kates vardas: ", catName);
}

spausdinti();
spausdinti();
// 3
console.log("Duomenys: " + vardas + " " + pavarde + " " + klase );

// 4
function spausdintiPazymius(x, y, z) {
    console.log("pazymiai:" + x + " " + y);
    console.log("mokytojos komentaras:" + z);
}

spausdintiPazymius(4.5, 0, "geras lankomumas");
spausdintiPazymius(6.5, 8, "prastas lankomumas");
spausdintiPazymius(10, 2, "prastas lankomumas");

// var ivestiDuomenys = prompt("Ivesk savo gimimo data");
// console.log(ivestiDuomenys);

// window.alert("Google situs pranesimus blokuoja");
// alert("aaa");

for (var i = 0; i <  50; i++) {
    console.log("Azuolas" + i);
    document.querySelector("main").innerHTML += "Azuolas" + i + "<br>";
}
// ==============patarimai==========
// reiksme  - kintamasis
// "reiksme" - tekstas
// reiksme() - f-ja

// 2 A
function spausdintiX( x ) {
    console.log(x);
}
// 2B
for (var i = 0; i <  150; i++) {
    spausdintiX(i);
}

// taikymas
// var paveiksliukas = "<img src='./1.jpg' width='200px' height='auto'/> ";
// for (var i = 0; i <  150; i++) {
//     document.querySelector('main').innerHTML += paveiksliukas;
// }


// 3
function piestiEilute (x) {
    var eilute = "";
    for (var i = 0; i < x ; i++) {
        eilute = eilute + "-";
    }
    //  !!! nupiesiam
    console.log(eilute);
}
function spausdintiStulpeli (x) {

}
piestiEilute(70);
console.log("|   nr   |      Name     |       Last name      |      date    |    age   |");
piestiEilute(70);
spausdintiStulpeli(7);
piestiEilute(70);






//
