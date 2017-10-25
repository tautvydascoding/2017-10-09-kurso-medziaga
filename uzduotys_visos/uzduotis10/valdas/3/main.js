console.log("labas vakaras");

var mat=[
    ["Timis", "Tomson", 1966, "Surinkejas"],
    ["Ona", "Aibė", 1962, "Meistre"],
    ["Rokas", "Maksis", 1988, "CEO"]
];

mat[0][3] = "Direktorius";
mat[1][3] = "Pavaduotoja";

console.log(mat);

for (var i = 0; i < mat.length; i++) {
    for (var j = 0; j < mat[i].length; j++) {
        console.log(mat[i][j]);
    }
}
