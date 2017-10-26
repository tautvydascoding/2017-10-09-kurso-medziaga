console.log("labas vakaras");


// try-catch

//uzduotis 1
// susikurti f-ja kuri padalina dvi reiksmes ir grazina rezultata pvz: dalinti(x, y)

// function dalinti(x = 1, y = 1) {// x ir y duodi reiksme kad butu apsauga, jei reiksmiu apacioje netycia neduotu ar panasiai
//   var rez = x / y;
//   return rez;


// }
// var rezultatas = dalinti(22,4);
// console.log(rezultatas);
// uzduots2
//ideti apsauga dalybai
// ar x ir y yra skaiciai
// ar y nera "0"
// ispetu vartotoja throw("zinute")
// apsauga kodui nuo nuliu ir ne skaiciu

function dalinti(x = 1, y = 1) {
  var rez = 0;
  try {
    if ( isNaN(x) || isNaN(y)) {
     throw "klaida, ivedet ne skaicius";
   } else {
     if (y !=0) {
       rez = x / y;
     } else {
       throw "klaida, ivedet ne skaicius \"0\" negalima";
     }

   }
  }
  catch (e) {
    // alert("klaida: ", e.description);
    console.error(e);
  }
  //neprivalomas, naudojamas tik su try catch, visada bus vykdomas
  finally {
    return rez;

  }

}
var rezultatas = dalinti(22,5);
console.log(rezultatas);
