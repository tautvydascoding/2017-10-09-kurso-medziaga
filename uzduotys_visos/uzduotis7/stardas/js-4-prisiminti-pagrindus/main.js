console.log ("Labas");

// 1A
var vardas,
pavarde,
klase;

// 1B
vardas = "Tomelis"
pavarde = "Jonaitis"
klase = 6;

//1C


//2
console.log("Vardas: " + vardas);
console.log("Pavarde: " + pavarde);
console.log("Klase: " + klase);


function spausdinti() {
  var catName = "aguona";
  console.log("kates vardas: ", catName);
}

spausdinti();
spausdinti();

//3
console.log("Duomenys: " + vardas + " " + pavarde + " " + klase);

//4
function spausdintiPazymius(x,y,z) {
  console.log("pazymiai: " + x + " " + y);
  console.log("mokytojos komentaras: " + z);
}
spausdintiPazymius(4.5, 0, "geras lankomumas");
spausdintiPazymius(6.5, 8, "blogas lankomumas");
spausdintiPazymius(10, 2, "blogas lankomumas");

// var ivestiDuomenys = prompt("Ivesk savo gimimo deta");
// console.log(ivestiDuomenys);

// window.alert("sudas");

for (var i = 0; i < 50; i++) {
  console.log("Azuolas" + i);
  document.querySelector("main").innerHTML += "Azuolas" + i + "<br>";
}

// 2A
function spausdintiX(x) {
  console.log(x);
}
// 2B
for (var i = 0; i < 150; i++) {
  console.log("aaaaa");
}

var paveiksliukas = "<img src='./images/1.png' width='100px' height='auto'/>";

document.querySelector('main').innerHTML += paveiksliukas;
for (var i = 0; i < 15; i++) {
  document.querySelector('main').innerHTML += paveiksliukas;
}

// 3

function piestiEilute (x) {
  var eilute = "";
  for (var i = 0; i < x ; i++) {
    eilute = eilute + "-";
  }
  // nupiesiame
  console.log(eilute);
}
function spausdintiStulpeli (x) {
  var stulpelis = "";
  for (var i = 0; i < x; i++) {
    stulpelis = "|";
    console.log(stulpelis);
  }
}
piestiEilute(70);
console.log("|  Nr. |  Name  |  Surname  |  Date  |  Age  |");
piestiEilute(70);
spausdintiStulpeli(7);
piestiEilute(70);
