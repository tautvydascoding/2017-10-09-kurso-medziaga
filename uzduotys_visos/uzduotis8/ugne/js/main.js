console.log("labas");
//               0            1     2
var preke = ["afrikaan lemon", "kg", 2.5];

console.log("Prekes pavadinimas:" + preke [0]);
console.log("matavimo vnt:" + preke [1]);
console.log("Prekes kaina:" + preke [2]);

preke[0] = "rare afrikaan lemon";
console.log("po pakeitimo, preke" + preke[0]);

//0 uzduotis
preke[2] = "4.99";
console.log("po pakeitimo, prekes kaina " + preke[2]);

//1 uzduotis
//sukurti masyva "zmogus", vardas, pavarde, gim.metai,miestas

var zmogus = ["Tomas", "Tomauskas", 1996, "Panevezys"];

console.log("Zmogus:", zmogus);

console.log("Zmogu", zmogus.toString() );

console.log("Zmogus su Join :", zmogus.join(" ** ") );


//1. masyvas. 3 dalykai i zygi.

var bag = ["palapine", "peilis", "miegmaisis"];

//ideti gale papildoma elementa "tualetini popieriu"

bag[4] = "tualetinis popierius";
console.log("pridetas elementas :", bag);

//?
//ideti i masyvo prieki "vandens"

/*var bag2 = [];

var bag2= "vanduo";
var bag2= "bag[0]";
var bag2= "bag[1]";
var bag2= "bag[2]";
var bag2= "bag[3]";

bag = bag2;
console.log("papildyta kuprine:", bag);*/

//arba

/*var bag3 = [];
for (var i = 0; 1 < 3; i++) {
    bag3[i+1] = bag[i]; 
}

bag3[0] = "vanduo";
console.log("bag3", bag3);*/

//kita uzduotis

for (var i = 3; i >= 0; i--) {
    bag[i+1] = bag[i]; //bag [3+1] = bag[3]
}

bag[0] = "vanduo";
console.log("atbulinis sarasas:", bag);