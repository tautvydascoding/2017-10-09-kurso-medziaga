console.log("labas vakaras");


var pagamintosDetales = [];
for (var i = 0; i < 100; i++) {
    // skaiciai nuo 50 iki 200
    var atsitiktinisSkaicius = (Math.random() * (200 - 50)) + 50;
    atsitiktinisSkaicius = Math.round( atsitiktinisSkaicius );

    pagamintosDetales[i] = atsitiktinisSkaicius;
}
console.log(pagamintosDetales);
// ============================
function dauginti(x, y) {
    if ( isNaN (x) ||  isNaN (y) ) {
        alert('ivedei ne skaiciu');
        return null;
    }
    return x * y;
}

dauginti("aaa" , 0);
// ============================

var kiekJauPakeiteme = 0;
for (var i = 0; i < pagamintosDetales.length; i++) {
     var skaicius = Math.random() * 100;
     // 10% tikimybe
     if ( skaicius   <=  10    &&  kiekJauPakeiteme < 10) {
         kiekJauPakeiteme++;
         pagamintosDetales[i]  = pagamintosDetales[i] * -1;
     }
}
console.log(pagamintosDetales);
//

Math.abs()
//
