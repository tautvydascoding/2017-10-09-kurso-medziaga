console.log("labas vakaras");

//              0                   1     2
var preke = ["Afrikines citrinos", "kg", 2.5 ];

console.log("Prekes pavadinimas: " + preke[0] );
console.log("matavimo vienetai: " + preke[1] );
console.log("Prekes kaina: " + preke[2] );

preke[0] = "Retosios afrikines citrinos";
console.log("po pakeitimo, preke " + preke[0]);

// 0 uzduotis
// pakeisti prekes kaina i 4.99 (ir isvesti i console)

// 1 uzduotis
// sukurti masyva "zmogus": vardas, pavarde, gimimo metai, miestas
var zmogus = ["Vytenis", "Vytauttukaitis", 1996, "Rokiskis"];

console.log("Zmogus: ", zmogus);

console.log("Zmogus:", zmogus.toString()   );  // sujungia visus masyvo elm. i veina eilute (atskiria kableliu)

console.log("Zmogus su Join: ", zmogus.join(" : ") );


var bag = ["palapine", "miegmaisis", "kilimelis"];

// 0 uzduotis
// ideti i masyvo gala "popieriaus"
bag[3]  = "popieriaus";
console.log("kuprines turinys:", bag.join(" | "));

// 1 uzduotis
// ideti i masyvo prieki "vanduo"

// var bag2  = [];
// bag2[0] = "vanduo";
// bag2[1] = bag[0];
// bag2[2] = bag[1];
// bag2[3] = bag[2];
//
// bag = bag2;
// console.log("Papildyta kuprine: ", bag);

// ========arba======

// var bag3 = [];
// for (var i = 0; i < 3 ; i++) {
//      bag3[ (i+1) ] = bag[i];
// }
// bag3[0] = "vanduo";
// bag = bag3;
// console.log("bag 3: ", bag);
//
// bag[100] = "jojo";

// ========arba======

console.log("Pries Atbulini sarasa:", bag);
for (var i = 3; i >= 0; i--) {
        bag[ i+1 ] = bag[i]; //   bag[ 3+1 ] = bag[3]
}
bag[0] = "vanduo";
console.log("Atbulinis sarasas:", bag);

console.log("Kuprine po surikiavimo:", bag.sort()  );






//
