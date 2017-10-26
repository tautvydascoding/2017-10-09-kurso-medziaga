console.log ("Labas");

var preke = ["citrinos", "kg", 2.5];
console.log("prekes pavadinimas: " + preke[0]);
console.log("prekes vienetai: " + preke[1]);
console.log("prekes kaina: " + preke[2]);

preke[0] = "retos afrikines citrinos";
console.log("po pakeitimo, preke "+ preke[0]);

//0 uzduotis
// pakeisti prkes kaina i 4.99
preke[2] = 4.99;
console.log("nauja kaina " + preke[2]);

var data = ["Antanas", "Dobilas", "Kaunas", 30];
console.log("Vardas: " + data[0]);
console.log("Pavarde: " + data[1]);
console.log("Miestas: " + data[2]);
console.log("Amzius: " + data[3]);

console.log("zmogus: ", data);

console.log("zmogus: ", data.toString()); // sujungia visus array elementus i vien eilute

console.log("zmogus su Join: ", data.join("  ")); // "atskiria zodzius

//0uzduotis

var bag = ["palapine", "miegmaisis", "kilimelis"];
bag [3] = "tualetinis";
console.log("tualetinis: " + bag[3]);
//1uzduotis
var bag3 = [];
for (var i = 0; i < 3; i++) {
  bag3[ (i+1) ] = bag[i];
}
bag3[0] = "vanduo";
bag = bag3;
console.log("bag3:", bag3);

bag[100] = "jojo";
//arba
console.log("pries srasa:" , bag);
for (var i = 3; i >= 0; i--) {
    bag[i+1] = bag[i]; //3bag[i+1] = bag[3]
}
bag[0] = "vanduo";
console.log("atbulinis sarasas:" ,bag);


console.log("kuprine po sutvarkimo:" ,bag.sort());
