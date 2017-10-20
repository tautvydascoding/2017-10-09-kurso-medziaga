console.log("labas vakaras");


// uzduotis 1 - pasikartoti masyvus
// susikurti masyva 50 ilgio
// masyva uzpildyti atsitiktiniais skaiciais nuo 10-1000

// uzduotis 2
// surasti geriausio darbuotojo numeri,
// (jeigu masyvo indexsas/ stalcius yra darbuotojo numeris)

var pagamintosDetales = [];  // global
for (var i = 0; i < 50; i++) {
    var  skaicius = Math.random() ; // local
    skaicius = skaicius * 990 + 10;  // 10-1000
    skaicius = Math.round(skaicius);
    pagamintosDetales[i] = skaicius;
}
console.log(pagamintosDetales);

// uzduotis 2
// surasti geriausio darbuotojo numeri,
// (jeigu masyvo indexsas/ stalcius yra darbuotojo numeris)

var  didziausiasSk = 0; // grabal
var geriausioDarbuotojoNr = 0;

for ( var i = 0; i < 50; i++) {
    if (didziausiasSk < pagamintosDetales[i]) {
        console.log(didziausiasSk);
        didziausiasSk = pagamintosDetales[i];
        geriausioDarbuotojoNr = i;
    }
}

console.log(didziausiasSk);
console.log("geriausio numeris: " , geriausioDarbuotojoNr);


// 2.1 uzduotis
// surasti prasciausia darbuotoja

var min = 9999999999;   // var min = pagamintosDetales[0];
var prasciausioDarbuotojoNr = 0;  // global
for (var i = 0; i < pagamintosDetales.length; i++) {

    if(pagamintosDetales[i]  < min) {
        // radom maziasni skaiciu
         min = pagamintosDetales[i];
         prasciausioDarbuotojoNr = i;
         console.log("siuometu maziausi", min);
    }
}

console.log("prasciausio Darbuotojo Nr: " + prasciausioDarbuotojoNr);




//
