// ============================= matricos
var darbuotojai = [];
darbuotojai = [
    ["Timis", "Thompson", 1986, "Surinkejas"],
    ["Ona", "Aibe", 1962, "Meistre"],
    ["Rokas", "Maksis", 1999, "Sales darbuotojas"]
];

darbuotojai[0][3] = "Direktorius";
darbuotojai[1][3] = "Pavaduotoja";
darbuotojai[2][3] = "Slavejas";

console.log(darbuotojai);
for (var i = 0; i < darbuotojai.length; i++) {
    for (var k = 0; k < darbuotojai[i].length; k++) {
        var info = (darbuotojai[i][k]);
        console.log(info);
    }
}

// ==============================================
