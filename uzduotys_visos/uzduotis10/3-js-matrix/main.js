console.log("labas vakaras");


var darbuotojai = [];

darbuotojai = [
    ["Timis", "tomson", 1986, "Surinkejas"],        // 0
    ["Ona", "Aibe", 1962, "Meistre"],               // 1
    ["Rokas", "Maksis", 1999, "Sales darbuotojas"]  // 2
];

console.log(darbuotojai);
var pirmoVardas = darbuotojai[0][0];
console.log("Nulintasis vardas: ", pirmoVardas);

// 0 uzduotis
// pakeisti keikvieno pareigas: pavaduotoja, direktorius, savininkas
darbuotojai[0][3] = "direktorius";
darbuotojai[1][3] = "pavaduotoja";
darbuotojai[2][3] = "savininkas";
console.log(darbuotojai);
// 1 uzdavinys
// atspausdinti visus darbuotojus ir visa info apie juos

// eisime per stulpelius
for (var i = 0; i < 3; i++) {
    // eisime per eilutes

    var info = darbuotojai[1][i];  // local
    console.log( info );
}
// =============================================
// eisime per stulpelius
for (var i = 0; i < 3; i++) {
    // eisime per eilutes
    for (var k = 0; k < 4; k++) {
        var info = darbuotojai[i][k];  // local
        console.log( info );
    }
}


//
