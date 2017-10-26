console.log("labas vakaras");

//1UZD
//sukurti 2 objektus "masina1","masina2" su savybem
//spalva, max-speed, durys, marke

var masina1 = {
    spalva: "raudona",
    maxspeed: 250,
    durys: 5,
    marke: "Opel",
};

var masina2 = {
        spalva: "violetine",
    maxspeed: 230,
    durys: 2,
    marke: "Audi",
};

//2UZD
//patikrinti, kuris auto letesnis ir isvesti jo marke

if (masina1.maxspeed < masina2.maxspeed) {
    console.log("greitesne masina", masina2);
    } else {
        console.log("greitesne masina", masina1);
    }

//3UZD
//sukurti switch, kuriam duodama "masinos" marke
//pagal masinos marke, switch'as turi atspausdinti spalva

//1.susikurti kintamaji ir prilyginti masinos markei;

var marke = masina1.marke; //<-- switch keisis pagal kintamaji, kuri irasysime. Galima rasyti ir "Audi", "Opel".

switch (marke) {
    case masina1.marke: //arba "Opel"
        console.log(masina1.spalva);
        break;
        
    case masina2.marke: //arba "Audi"
        console.log(masina2.spalva);
        break;
    default: console.log("marke nerasta"); //,--suveikia jei nerandamas atitinkamas kintamasis, galima isvesti reiksme
        }