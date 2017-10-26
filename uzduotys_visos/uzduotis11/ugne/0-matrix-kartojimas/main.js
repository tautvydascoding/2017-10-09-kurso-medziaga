console.log("labas vakaras");

var stalas = [];


stalas = [
    ["Vilnius", 250, 550, true], 
    ["Kaunas", 130, 200, true],
    ["Panevezys", 90, 190, false],
    ["Siauliai", 40, 140, false]
];


//8.1UZD
//isvesti duomenis i console naudojant 1 for



/*for (var i=0; i<4; i++) {
    console.log("Adresas", stalas[i][0]);
    console.log("Darbuotoju skaicius", stalas[i][1]);
    console.log("Dydis kv.m.", stalas[i][2]);
    console.log("Darbas savaitgaliais", stalas[i][3]);
    console.log("---------------");
}*/

//8.2 UZD
//isvesti duomenis naudojant 2 for

for (var i=0; i < stalas.length; i++) {
    console.log("---");
    for (var k=0; k < 4; k++) {
        console.log(stalas[i][k]);
    }
}
//kad  atskirti bruksneliais, galima rasyti:
document.querySelector("section").innerHTML+= "tekstas";

for (var i=0; i<4; i++) {
    document.querySelector("section").innerHTML+= "</br><h2 class='text-info'>Adresas" + stalas[i][0] + "</h2>";
    document.querySelector("section").innerHTML+= "<h2 class='text-info'>Darbuotoju sk." + stalas[i][1] + "</h2>";
    document.querySelector("section").innerHTML+= "<h2 class='text-info'>Plotas kv.m." + stalas[i][2] + "</h2>";
    document.querySelector("section").innerHTML+= "<h2 class='text-info'>Darbas savaitgaliais" + stalas[i][3] + "</h2>";
 
}