console.log("labas");

var prekes = ["Afrikines vitrinos", "kg", 2.4 ];

console.log("Prekes pavadinimas: " + prekes [0] );
console.log("matavimo vienetai: " + prekes [1] );
console.log("Prekes kaina: " + prekes [2] );

prekes[0] = "Retosios Afrikines citrinos";
console.log("po pakeitimo, preke " + prekes[0]);

//0 uzduotis
//pakeisti prekes kaina i 4.99 (ir isvesti i console)

prekes[2] = 4.99;
console.log(prekes[0], prekes[2]);
//1 uzduotis
//sukurti masyva "zmogus": vardas, pavarde, gimimo metai, miestas

var zmogus = ["Vycka", "Jonaitis", "1990", "Vilnius"];
console.log("Zmogus: ", zmogus);

console.log("Zmogus:", zmogus.toString()); // sujungia visus masyvo elementys i viena eilute (atskirdamas kableliu)

console.log("Zmogus su Join: ", zmogus.join(" : "));

var bag = ["palapine", "miegmaisis", "kilimelis"];

// 0 uzduotis
// ideti i masyvo gala "popieriaus"
bag [3] = "popieriaus";
console.log(bag);

// 1
//ideti i masyvo prieki "vandens"
bag.unshift("vanduo");
console.log(bag);

console.log("Kuprine po sutvarkymo: ", bag.sort());
