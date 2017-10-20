console.log ("Labas");

var skaicius = 100;

console.log(skaicius); //100

var liekana = 100 % 3;

console.log( "100 / 3 Liekana yra:", liekana); //33+33+33=99

skaicius ++; //101
skaicius ++; //102

console.log ("skaicius po padidejimo:", skaicius);
skaicius--; //101
console.log ("skaicius po sumazinimo", skaicius);

/*------------------------------*/
var name = "Tomas";
var lname = "Tomauskas";

var autorius = name + lname;

console.log("autorius", autorius);

autorius = autorius + "gime 1865 metais";

console.log("autorius", autorius);
//trumpiau
autorius +="gruodzio 14d.";
console.log("autorius", autorius);