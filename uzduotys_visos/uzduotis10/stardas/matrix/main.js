console.log("labas vakaras");

var darbuotojai = [];

darbuotojai = [
  ["Timis", "Price", 1985, "Surinkejas"],
  ["Ona", "Aibe", 1962, "Meistre"],
  ["Robke", "Smobke", 1919, "Shefas"]
];

console.log(darbuotojai);
var pirmoVardas = darbuotojai[0][0];
console.log("Nulintasis vardas: " + pirmoVardas);

// 0 uzduotis
// pakeisti kiekvieno pareigas: pavaduotoja, direktorus, savininkas

darbuotojai [0][3] = "direktorius";
darbuotojai [1][3] = "pavaduotoja";
darbuotojai [2][3] = "savininkas";
console.log(darbuotojai);

// 1 uzduotis
// atspausdinti visus darbuotojus

//eisime per stulpelius
for (var i = 0; i < darbuotojai.length; i++) {
  // eisime per eilute
  // for (var k = 0; k < darbuotojai[i].length; k++) {
  for (var k = 0; k < 4; k++) {
    var info = darbuotojai[i][k];
    console.log(info);
  }
}
