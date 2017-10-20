console.log ("labas");
var name = "Juozas";
var lastname = "Petraitis";
var vidutinesPajamos = 1000 / 12 * 0.68;
name = "Kazimieras"
console.log ("Vardas", name);
console.log ("Vardas ir Pavarde " + name + " " + lastname);
console.log ("Uzdarbis i rankas " , vidutinesPajamos);

function spausdintiVarda() {
  console.log("Vardas: " + name);
}
function spausdintiVidutiniAtlyginima() {
  console.log("vidutines pajamos: ", vidutinesPajamos);
}

spausdintiVarda();
spausdintiVarda();
spausdintiVarda();
spausdintiVidutiniAtlyginima();

function sudauginti(x, y) {
  var suma = x * y;
  console.log("suma yra", suma);
}

sudauginti( 20, 4);
sudauginti( 3, 4);
sudauginti( 22, 2);

var kvadratas200 = sudauginti( 20, 3) * sudauginti( 20, 10);

console.log(kvadratas200);
