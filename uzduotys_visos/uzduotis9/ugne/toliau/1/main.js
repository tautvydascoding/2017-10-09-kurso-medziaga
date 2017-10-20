//naujas masyvas, 50 ilgumo

var pagamintosDetales = [];

for (var i=0; i<100; i++) {
    var randomNumber = (Math.random()* (200 -50)) +50;
/*skaiciai nuo 50 iki 200*/
    var randomNumber = Math.round(randomNumber);
    pagamintosDetales[i]= randomNumber;
}

console.log(pagamintosDetales);


//reikia padaryti kad tik 10% isridenimu pasikeistu
//=================================

var skaicius = Math.random() * 100;
console.log(skaicius);

if (skaicius<=10) {
    
}

//================
var kiekjaupakeiteme = 0;
for (var i=0; i<pagamintosDetales.length; i++) {
    var skaicius = Math.random()*100;
    //skaiciuojam 10% tikimybe
    if (skaicius <=10 && kiekjaupakeiteme <10) {
        kiekjaupakeiteme ++
        pagamintosDetales[i] = pagamintosDetales[i]* -1;
    }
}
console.log(pagamintosDetales);
//reikia paversti sarasa teigiamu
Math.abs(pagamintosDetales);

function dauginti (x, y) {
    if (isNan (x) || isNan (y) ) {
        alert('tai ne skaicius');
        return null;
    }
    return x * y;
}

//pvz/dauginti ("aaa", 0),todel reikia uzdeti apsauga