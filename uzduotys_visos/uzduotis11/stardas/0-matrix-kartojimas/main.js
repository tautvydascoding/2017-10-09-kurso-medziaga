console.log("labas vakaras");


// kartojames matricas

//1 uzduotis
// susikurti duomenis apie prekybos centru tinkla "Stalas" (4 prekybos centrai)
// adresas, darbuotojai, patalpu dydis, savaitgaliai (ar dirba)

var stalas = [];                                       //saugos visus prekybos centrus
x1 = ["Kaunas, Lukšio g. 60", 14, 660, false];        // 0
x2 = ["Vilnius, Virsuliskiu g. 13", 23, 1260, true];        // 0
x3 = ["Klaipeda, Taikos g. 11", 32, 921, false];        // 0
x4 = ["Kaunas, Savanoriu pr. 243", 78, 1910, true];        // 0
stalas[0] = x1;
stalas[1] = x2;
stalas[2] = x3;
stalas[3] = x4;
console.log(stalas);



// 2.1 uzduotis
// issivesti duomenis i console naudojant 1 for

for (var i = 0; i < 4; i++) {
console.log("Adresas: ", stalas[i][0]);
console.log("Darbuotoju skaicius: ", stalas[i][1]);
console.log("Plotas: ", stalas[i][2], " m2");
console.log("Dirba savaitgali?: ", stalas[i][3]);
}
// 2.2 uzduotis
// isvesti duomenis i console naudojant 2 for

for (var i = 0; i < stalas.length; i++) { // i - bega per eilute
  for (var k = 0; k < 4; k++) { // k - bega per stulpeli
    console.log(stalas[i][k]);
  }
  console.log("_____________________________");
}

// 3
// isvesti duomenis i HTML

document.querySelector("section").innerHTML += "tekstas";

for (var i = 0; i < stalas.length; i++) {
  document.querySelector("section").innerHTML += "<h2>Adresas: " + stalas[i][0] + "</h2>";
  document.querySelector("section").innerHTML += "<h3>Darbuotoju skaicius: " + stalas[i][1] + "</h3>";
  document.querySelector("section").innerHTML += "<h3>Plotas: " + stalas[i][2] + "</h3>";
  document.querySelector("section").innerHTML += "<h3>Dirba savaitgali: " + stalas[i][3] + "</h3> <br><br>";
}
