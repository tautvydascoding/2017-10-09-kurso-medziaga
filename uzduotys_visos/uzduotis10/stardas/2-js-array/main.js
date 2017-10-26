console.log("labas vakaras");

// 1 uzduotis - pasikartoti masyvus
// susikurti masyva 50 ilgio
// masyva uzpildyti atsitiktiniais skaiciais nuo 10 iki 1000


var pagamintosDetales = [i];  // globas
  for (var i = 0; i < 50; i++) {
    var skaicius = Math.random();// local
    skaicius = skaicius * 990 + 10; //10-1000
    skaicius = Math.round(skaicius);
    pagamintosDetales[i] = skaicius;
  }
  console.log(pagamintosDetales);



  // 2 uzduotis
  // surasti geriausio darbuotojo numeri, jeigu masyvo indexas/stalcius yra darbuotojo numeris
  var maxDetaliu = 0;
    for (var i = 0; i < 50; i++) {
      if (maxDetaliu < pagamintosDetales[i]) {
      maxDetaliu = pagamintosDetales[i];
      geriausioDarbuotojoNr = [i];
      }
    }
      console.log("daugiausiai detaliu: ", maxDetaliu);
      console.log("geriausio darbuotojo numeris eileje", geriausioDarbuotojoNr);

      // uzduotis 2.1 surasti blogiausia darbuotoja

  var minDetaliu = 99999999; // var min = pagamintosDetales[0]
  var prasciausioDarbuotojoNr = 0; //globalus
    for (var i = 0; i < pagamintosDetales.length; i++) {
      if (pagamintosDetales[i] < minDetaliu) {
        //radom mazesni skaiciu
        minDetaliu = pagamintosDetales[i];
        prasciausioDarbuotojoNr = i;
        console.log("Siuo metu maziausia detaliu pagaminta: ", minDetaliu);
      }
    }

console.log("prasciausio darbuotojo nr: " + prasciausioDarbuotojoNr);
