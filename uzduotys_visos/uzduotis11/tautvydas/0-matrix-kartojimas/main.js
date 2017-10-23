console.log("labas vakaras");

// ---------kartojames matricas
// A uzduotis
// susikurti duomenis apie prekybos centru tinkla "Stalas" (4 prekybos centrai)
// pvz:
// adresas, darbuotojai, patalpu dydis, savaitgaliai (ar dirba)

var stalas = []; // saugos visus prekybos centrus
x1 = ["Kaunas savanoriu pr 1", 32, 352, false ];
x2 = ["Vilnius, Vytauto g. 12", 23, 546, true];
x3 = ["Klaipeda, Ankalnio g. 41", 31, 200, true];
x4 = ["Klaipeda, Vytauto g. 324", 5, 105, true];
stalas[0] = x1;
stalas[1] = x2;
stalas[2] = x3;
stalas[3] = x4;
console.log(stalas);
// B.1 uzduotis
// issivesti duomenis i console naudojant 1 for
// for (var i = 0; i < 4; i++) {
//     console.log("Adreas:",  stalas[i][0]);
//     console.log("Darbuotoju skaicius:",  stalas[i][1]);
//     console.log("plotas:",  stalas[i][2], "m2");
//     console.log("Ar dirba savaitgaliais:",  stalas[i][3]);
//     console.log("-------------------------");
// }
// B.2 uzduotis
// isvesti duomenis i console naudojant 2 for
// for (var i = 0; i < stalas.length; i++) {  // i - bega per  eilute
//      for (var k = 0; k < 4; k++) {        // k - bega per stulpelius
//          console.log(stalas[i][k]);
//      }
//      console.log("-------------");
// }
// C uzduotis
// isvesti duomenis i HTML

document.querySelector('section').innerHTML += "tekstas";
document.querySelectorAll('section')[0].innerHTML += "tekstas";


for (var i = 0; i < stalas.length; i++) {
     document.querySelector('section').innerHTML += "<div> <h2 class='text-info'>Adresas " + stalas[i][0] + "</h2>";
     document.querySelector('section').innerHTML += "<h3 class='text-warning'>Darbuotoju sk: " + stalas[i][0] + "</h3>";
     document.querySelector('section').innerHTML += "<h3 class='text-warning'>Plotas " + stalas[i][0] + "</h3>";
     document.querySelector('section').innerHTML += "<h3 class='text-warning'>Savaitgaliai " + stalas[i][0] + "</h3>    <br><br> </div>";

    //  document.querySelector('section').innerHTML += '<h2 class="text-info">Adresas ' + stalas[i][0] + "</h2>";
}



//
