console.log("labas vakaras");

var darbuotojai = [];

darbuotojai = [
  ["timis","tomson", 1986, "surinkejas"],     //0
  ["ona","aibe", 1966, "meistre"],             //1
  ["rokas","maksis", 1996, "sales darbuotojas"]//2

];

console.log(darbuotojai);

var pirmoVardas = darbuotojai[0][0];
console.log(pirmoVardas);
//pakeisti kiekvieno pareigas
darbuotojai[0][3] = "direktorius";
darbuotojai[1][3] = "pavaduotoja";
darbuotojai[2][3] = "savininkas";
console.log(darbuotojai[2][3]);


//uzduotis atspaudinti visus darbuotjus ir ju info

//eisime per stulpelis
for (var i = 0; i < darbuotojai.length; i++) {

    for (var k = 0; k < darbuotojai[i].length; k++) {

      console.log(darbuotojai[i][k]);

    }
}











///
