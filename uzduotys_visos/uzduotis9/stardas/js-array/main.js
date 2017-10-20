console.log("labas vakaras");

var atsitiktinisSkaicius = Math.random();
atsitiktinisSkaicius = atsitiktinisSkaicius * 100;
atsitiktinisSkaicius = Math.round (atsitiktinisSkaicius);
console.log("atsitiktinis skaicius: ", atsitiktinisSkaicius);

function sugeneruokSkaiciuNuo10Iki100 () {
  var atsitiktinisSkaicius = Math.random();
  atsitiktinisSkaicius = atsitiktinisSkaicius * 90 + 10;
  atsitiktinisSkaicius = Math.round (atsitiktinisSkaicius);
  console.log("atsitiktinis skaicius: ", atsitiktinisSkaicius);

// console.log(sugeneruokSkaiciuNuo10Iki100 ());
return atsitiktinisSkaicius;
}

var detales = [];
for (var i = 0; i < 50; i++) {
  detales[i] = sugeneruokSkaiciuNuo10Iki100(1);
}
console.log(detales);

function lyginisnelyginis(x){
    if (x %2==0){
        return "lyginis";
      }
      else {
        return x;
      }
}
var y=sugeneruokSkaiciuNuo10Iki100();
for (var i = 0; i < detales.length; i++) {
  var skaicius = detales[i];
  detales[i]=lyginisnelyginis(skaicius);
}
console.log(detales);



console.log(lyginisnelyginis(y));
