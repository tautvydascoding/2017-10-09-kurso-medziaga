console.log("labas vakaras");

// try - catch

//1 uzduotis
// susikurti funkcija kuri padalina di reiksmes ir grazina rezultata
// pvz.: (x, y)

// var rezultatas = dalinti(100, 4);
// function dalinti(x, y) {
//   var rez = x / y; //local
//   return rez;
// }
// console.log(rezultatas);

// 2 uzduotis
// ideti apsauga dalybai

var rezultatas = dalinti(100, 5);
function dalinti(x, y) {
  try {
    var rez = x / y; //local
  }
  catch (e) {
    alert("Ivyko klaida: ", e.description);
  }
  return rez;
}

console.log(rezultatas);

for (var i = 0; i < array.length; i++) {
  array[i]
}
