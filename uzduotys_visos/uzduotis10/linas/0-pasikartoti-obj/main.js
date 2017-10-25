console.log("labas vakaras");


// 1 uzduotis
// sukurti 2 Objektus "masina1", "masina2" kuris turi savybes:
// spalva, max-speed, durys, marke

// 2 uzduotis
// patikrinti, kuris automobilis letesnis. Ir atspausdinti jo marke

// 3 uzduotis
// sukurti "switch", kuriam bus duodamas "masinos" marke
// pagal masinos marke, switchas - turi atspausdinti spalva


// 1
var car1 = {
    color: "red",
    maxSpeed: 220,
    doors: 5,
    name: "Opel"
};
var car2 = car1;
car2.color = "blue";
car2.maxSpeed = 180;
car2.doors = 3;
car2.name = "Audi";
// 2
if ( car1.maxSpeed < car2.maxSpeed) {
    console.log("letesne " + car1.name);
} else {
    console.log("letesne " + car2.name);
}
// 3
var marke = "Audi";
switch (marke) {
    case "Audi":
            console.log( car1.name );
            console.log( car1.color);
        break;
    case "Opel":
            console.log( car2.name );
            console.log( car2.color);
        break;
    case "Mitsubichi":
            console.log("nieko nezinome");
        break;
    default:
            console.log( "Tokia masinos marke neuzregistruote musu registre" );
        break;
}
