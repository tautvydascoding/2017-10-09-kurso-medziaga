console.log("labas vakaras");



// try - catch

// 1 uzduotis
// susikurti f-ja kuri padalina dvi reiksmes ir grazina rezultata
// pvz.: dalinti(x, y)

// defaults
// function dalinti(x = 4, y = 1) {
//     var rez = x / y;   // local
//     return rez;        //  return x / y;
// }
// var rezultatas = dalinti(100, 5);
// console.log(rezultatas);


// 2 uzduotis
// ideti apsauga dalybai
// A)  ar "x" ir "y" yra skaiciai
// B)  ar "y" nera "0"
// priesingu atvehu ispeti vartotoja   throw( "zinute");

// defaults
function dalinti(x = 4, y = 1) {
    var rez = 0;
    try {
        // A
        if ( isNaN(x) || isNaN(y) ) {
            throw "Klaida, ivedet ne skaicius";
        } else {
            // B
            if ( y != 0) {
                rez = x / y;
            } else {
                throw "Klaida, dalyba is \"0\" negralima";

                console.log("aaaaa");
            }
        }
    }
    catch (e) {
        // console.warn("klaida dalyboje");
        // alert("Ivyko klaida: ");
        console.error( e );
        
    }
    // neprivalomas; naudojams tik su try-catch;
    // visada bus vykdomas, nesvarbu ar ivyko klaidu
    finally {
        return rez;
    }
}
var rezultatas = 0;
rezultatas = dalinti(100, 50);
console.log(rezultatas);
