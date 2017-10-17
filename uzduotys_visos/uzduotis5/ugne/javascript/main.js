console.log ("Labas");

var name = "Juozas";
var lname = "Juozines";
var vidutinesPajamos = 10000 / 12 *  0.68;

console.log("Vardas", name);
console.log("Vardas ir Pavarde" + name + " " + lname);
console.log ("Uzdarbis i rankas: " + vidutinesPajamos);

/*spausdinti varda*/
function spausdintiVarda() {
    console.log("Vardas: " + name)
}

function spausdintiVidAlga() {
    console.log("vidutines pajamos: ", vidutinesPajamos);
    
}

function sudauginti( x, y) {
    var suma = x * y;
    console.log("suma yra", suma);
}

sudauginti( 20, 10);