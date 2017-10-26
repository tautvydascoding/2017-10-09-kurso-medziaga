console.log
("labas")

var name = "Juozas";
var lastname = "Juozines";
var vidutinesPajamos = 1000 / 12 * 0.68;

console.log("Vardas", name);
console.log("Uzdarbis i rankas" , vidutinesPajamos) ;

function spausdintiVarda() {
  console.log("Vardas:" + name);

}
function spausdintiVidutiniAtlyginima()
 {
   console.log("vidutines pajamos: " ,vidutinesPajamos);

}
spausdintiVarda();
spausdintiVarda();

// sunkesnis
function sudauginti(x, y){
  var suma = x * y;
  console.log("suma yra ", suma);
  return suma;
}
sudauginti(20, 10);

var kvadratas200 = sudauginti(20, 10) * sudauginti(20, 10);
console.log("suma yra " , kvadratas200)
