


 //// ------------------------------------------------------------
//// |    nr     |     Name     |     lName    |
//// ------------------------------------------------------------
//// |
//// |
//// |
//// |
//// |
//// ------------------------------------------------------------------
//
////  4) piestiEilute(x)    f-ja kurioje while ciklas nupiesia eilete (x - skaicius kokio ilgio nupiesti)
//// A) susikurti f-ja
//// B) i f-ja ^ ideti while cikla
//// C) uz while atspausdintin suskaiciuota eilute
//
////  5) piestiStulpeli(x)    f-ja kioje while ciklas nupiesia stulpeli
//// 6) nupiestiLentelesStulpeliuPavadinimus(firstColName, secondColName, lastColName) Nereik while!
function piestiEilute(x, y) {
    var row = "";
    if (!y) {
        y="-";
    }

    for(i=0; i<x; i++) {
        row+=y;
    }
    console.log(row);
}

function piestiStulpeli(y) {
    for (j=0; j<y; j++) {
        if (j%2===0) {
            console.log("|");
        } else {
            console.log(" ");
        }
    }

}


piestiEilute(50);
console.log("   NR   |       Vardas     |       Pavarde     |");
piestiEilute(50, "=");
piestiStulpeli(10);
piestiEilute(50, "=");

// uzduotis 7
// panaudojant for loop atspausdinti 2 eilutes po 3 paveiksliukus
