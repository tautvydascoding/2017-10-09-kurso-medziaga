console.log("labas vakaras");
// 1 uzduotis
// sukurti 2 Obj objekta "masina1", "masina2" kuris turi savybes: spalva, max-speed, dureliu skaicius, marke
var masina1 = {
  spalva : "raudona",
  maxSpeed : 302,
  dureles : 3,
  marke : "Ferrari",
};
var masina2 = {
  spalva : "geltona",
  maxSpeed : 318,
  dureles : 2,
  marke : "Lamborghini",
};

console.log(masina1, masina2);
// 2 uzduotis
// reikes isvesti masinos marke, kurios greitis yra letesnis
if (masina1.maxSpeed > masina2.maxSpeed) {
    console.log("letesne masina yra: ", masina2.marke);
  } else {
    console.log("letesne masina yra: ", masina1.marke);
  }
// 3 uzduotis
// sukurti "switch", kuriam bus duodamas "masina1" objektas
//pagal masinos marke, switchas turi atspausdinti spalva

switch ("Lamborghini") {
  case "Lamborghini":
    console.log(masina2.marke);
    console.log(masina2.spalva);
  break;
  case "Ferrari":
    console.log(masina1.marke);
    console.log(masina1.spalva);
  default:
    console.log("Tokios masinos neturime");

}
