console.log ("Labas");


var skaicius = 100;

console.log( skaicius );   // 100

var liekana = 101 % 3;

console.log( " 101 / 3 Liekana yra: ", liekana); // 33 + 33 + 33 = 99


skaicius++; // 101
skaicius++; // 102
skaicius++; // 103
console.log("skaicius po padidejimo: ", skaicius);
skaicius--; // 102
console.log("skaicius po sumazinimo: ", skaicius);
// =================================================
var name = "Tomas";
var lname = "Tomaiskutis";

var autorius = name + lname;
console.log("autorius", autorius);
autorius = autorius + " gime 1965 metais";
console.log("autorius", autorius);
// trumpiau
autorius += " gruodzio 14d";  // +=    "autorius = autorius +"
console.log("autorius", autorius);


//
