
//naujas masyvas, 50 ilgumo

var pagamintosDetales = [];

for (var i=0; i<100; i++) {
    var randomNumber = (Math.random()* (200 -50)) +50;
/*skaiciai nuo 50 iki 200*/
    var randomNumber = Math.round(randomNumber);
    pagamintosDetales[i]= randomNumber;
}

console.log("pagamintosDetales");