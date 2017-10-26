console.log("labas vakaras");
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
var pagamintosDetales = [];

for (var i = 0; i < 100; i++) {
  // skaiciai nuo 50 iki 200
  var atsitiktiniaisSkaicius = (Math.random () * (200 - 50))+50;
   atsitiktiniaisSkaicius = Math.round(atsitiktiniaisSkaicius);

   pagamintosDetales [i] = atsitiktiniaisSkaicius;
}
console.log(pagamintosDetales);
//=============
var skaicius = Math.random() * 100;
console.log(skaicius);
if (skaicius <=10) {

}
//==========
var kiekJauPakeiteme = 0;
for (var i = 0; i < pagamintosDetales.length; i++) {
  var skaicius = Math.random() * 100;
  // 10% tikimybe
  if (skaicius <= 10 && kiekJauPakeiteme < 10) {
      kiekJauPakeiteme++;
    pagamintosDetales[i] = pagamintosDetales[i] * -1;
  }
}

console.log(pagamintosDetales);


function dauginti(x, y) {
  if (isNaN (x) || isNaN(y)) {
    alert("ne skaicius");
    return null;
  }
return x * y;

}
dauginti(1, 0);
console.log();
