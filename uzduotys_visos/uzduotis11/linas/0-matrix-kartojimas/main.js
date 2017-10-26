console.log("labas vakaras");

var stalas = []; //saugos visus prekybos centrus

stalas = [
['kaunas', 19, 345, false],
['vilnius', 29, 445, true],
['klaipeda', 9, 245, true],
['siauliai', 5, 145, true],


];
console.log(stalas);

for (var i = 0; i < 4; i++) {
console.log("adresas", stalas[i][0]);
console.log("darbuotoju sk", stalas[i][1]);
console.log("plotas", stalas[i][2], "m2");
console.log("savatgailiai", stalas[i][3]);
}

// for (var i = 0; i < stalas.length; i++) {
//   for (var k = 0; i < 4; k++) {
//     console.log(stalas[i][k]);
//   }
// }
document.querySelector('section').innerHTML += "";


for (var i = 0; i < stalas.length; i++) {
  document.querySelector('section').innerHTML += "<div><h2>Adresas " + stalas[i][0] + "</h2>";
  document.querySelector('section').innerHTML += "<h3>darbuotoju sk " + stalas[i][1] + "</h3>";
  document.querySelector('section').innerHTML += "<h3>plotas " + stalas[i][2] + "</h3>";
  document.querySelector('section').innerHTML += "<h3>savaitgaliai " + stalas[i][3] + "</h3> <br></br></div>" ;

}
