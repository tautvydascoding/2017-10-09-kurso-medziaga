console.log ("Labas");


var skaicius = 101;

console.log( skaicius ); //100

var liekana = 101 % 3;

console.log( "101 / 3 Liekana yra: ", liekana );

skaicius++; // 102
skaicius++; //103
console.log("skaicius po padidejimo ", skaicius);
skaicius--;//102
console.log("skaicius po sumazinimo ", skaicius);

var name = "Tomas";
var lname = " Tomsaistis";

var autorius = name + lname;
console.log("autorius", autorius);
autorius = autorius + "gime  1965 metais";
console.log("autorius", autorius);
//trumpiau
autorius += "gruodzio 14d"; // +=   reitesnis vairianyas
console.log("autorius", autorius);
