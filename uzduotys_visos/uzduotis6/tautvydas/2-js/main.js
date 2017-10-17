console.log ("Labas");

//  komentaras
/*
    daug komentaru
  */
var name = "Juozas";
var lname = "Juozines";
var vidutinesPajamos = 10000 / 12 * 0.68;

name = "Kazimieras";
console.log("Vardas   ", name);  // juozas
console.log("Vardas ir Pavarde  " + name + " " + lname);  // juozas
console.log("Uzdarbis i rankas: ", vidutinesPajamos, name, lname);


//
function spausdintiVarda() {
    console.log("Vardas: " + name);
}
function spausdintiVidutiniAtlyginima() {
    console.log("vidutines pajamos: ", vidutinesPajamos);
}

spausdintiVarda();
spausdintiVarda();
spausdintiVarda();
spausdintiVarda();
spausdintiVidutiniAtlyginima();
spausdintiVidutiniAtlyginima();


function sudauginti(x, y) {
    var suma = x * y;
    console.log("suma yra ", suma);
}

sudauginti(20, 10);
sudauginti(1, 5);

// ===============================sunkesnis===============

function sudauginti(x, y) {
    var suma = x * y;
    console.log("suma yra ", suma);
    return suma;
}

//                      200                    200            = 40 000
var kvadratas200 = sudauginti(20, 10) * sudauginti(20, 10);
//                                  200                    200            = 40 000
var kvadratas200kitaip = sudauginti( sudauginti(20, 10), sudauginti(20, 10)) ;

console.log("kavadratas", kvadratas200);


//



//
