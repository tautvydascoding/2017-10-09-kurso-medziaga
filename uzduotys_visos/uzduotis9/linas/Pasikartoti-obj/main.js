console.log("labas vakaras");

var car1 = {
  color: "red",
  speed: 200,
  durys: 2,
  marke: "audi"

};

var car2 = {
  color: "blue",
  speed: 180,
  durys: 4,
  marke: "opel"

};

if (car1.speed > car2.speed ) {
  console.log("letesnis: " + car2.marke);
}else {
  console.log("letesnis: " + car1.marke);
}
var marke = car2.marke;
switch (marke) {
  case "audi":
  console.log(car1.marke);
  console.log(car1.color);
  break;

  case "opel":
  console.log(car2.marke);
  console.log(car2.color);
    break;
  default:

}
