console.log ("Labas");
// 1uzduotis
var name;
var lname;
var klase;
name = "Linas";
lname = "Pel";
klase = 6;

console.log("name:" + name);
console.log("lname:" + lname);
console.log("klase:" + klase);
//2uzduotis

function spausdinti() {
  var catName = "aguona";
  console.log("kates vardas" , catName);

}
spausdinti ();
// 3 uzduotis
console.log("Duomenys:" + name + " " + lname + " " + klase);
//4 uzduotis

function spausdintiPazymius(x, y, z) {
console.log("pazymiai:" + x + " " + y);
console.log("mokytojos komentaras:" + z);
}

spausdintiPazymius(4.5, 0, "geras lankomumas");
spausdintiPazymius(6.5, 8, "prastas lankomumas");
spausdintiPazymius(10, 2, "prastas lankomumas");


// var ivestiDuomenys = prompt("Ivesk savo gimimo data");
// console.log(ivestiDuomenys);


// window.alert("Google situos pranesimus blokuoja");

// for ( i = 0; i < 50; i++ ) {
//   console.log("azuolas" + i);
//   // document.write("azuolas <br>");
//   document.querySelector('main').innerHTML += "azuolas" + i + "<br>"
// }

// reiksme - kintamasis
// "reiskme" - tekstas
// reiksme() - funkcija
//2
// function spausdintiX( x ){
//   console.log(x);
//
// }
// //2b
// for ( i = 0; i < 150; i++ ) {
//   console.log("x" + i);
//   document.querySelector('main').innerHTML += " x " + i + "<br>";
// }
// spausdintiX()

//taikymas
// var paveiksliukas = "<img src='./fonas.jpeg' width ='100px' height='auto'/>";
// document.querySelector('main').innerHTML += paveiksliukas;
//
// for ( i  = 0; i < 150; i++ ){
//   document.querySelector('main').innerHTML += paveiksliukas;
// }



//uzduotis3

// piestiEilute(50);
// console.log("   NR   |       Vardas     |       Pavarde     |");
// piestiEilute(50, "=");
// piestiStulpeli(5);
// piestiEilute(50);


  function piestiEilute (x) {
    var eilute = "";
    for (var i = 0; i < x ; i++) {
    eilute = eilute + "-";
    }
    // !!!!!! nupiesiam
    console.log(eilute);
  }

function spausdintiStulpeli (x) {
  var stulpelis = "";
  for ( var i = 0; i < x; i++) {
    stulpelis = stulpelis + "/";
    console.log(stulpelis);
  }
}

piestiEilute(50)
console.log(" |   NR   |       Vardas     |       Pavarde     |");
piestiEilute(50)
spausdintiStulpeli(5)
piestiEilute(50)
