 console.log("labas vakaras");


//uzduotis 1 pasikartoti masyvs
// sukurti masyva 50ilgio
// masyva uzpildyti random skaiciaus nuo 10-1000

//uzduotis 2
// surasti geriausio darbuotojo numeri
//(jeigu masyvo indexas/stalciaus ura darbuotojo numeris)


var pagamintosDetales = []; //blobal
for (var i = 0; i < 50; i++) {
  var skaicius = Math.random();//local
  skaicius = skaicius * 990 + 10; //10-1000
  skaicius = Math.round(skaicius);
  pagamintosDetales[i] = skaicius;
}
console.log(pagamintosDetales);

// uzduotis2
var didziausiasSk = 0; // global
var geriausioDarbuotojoNr = 0;
 for (var i = 0; i < pagamintosDetales.length; i++) {
   if (didziausiasSk < pagamintosDetales[i]) {
      didziausiasSk = pagamintosDetales[i];
      geriausioDarbuotojoNr = i;

   }

 }
 console.log(didziausiasSk);
 console.log(geriausioDarbuotojoNr);


 var maziausiasSk = 999; ///var min = pagamintosDetales[0]
 var prasciausiasDarbuotojoNr;
 for (var i = 0; i < pagamintosDetales.length; i++) {

   if (maziausiasSk > pagamintosDetales[i]) {
     maziausiasSk = pagamintosDetales[i];
     prasciausiasDarbuotojoNr = i;

   }
 }
 console.log(maziausiasSk);
 console.log(prasciausiasDarbuotojoNr);
