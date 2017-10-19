var everyother = [];

// for(var i = 0; i < 50; i++){
//     everyother[i] = 1;
//
// }
//
// for(var i = 1; i < 50; i += 2){
//     everyother[i] = 3;
// }
//
// console.log(everyother);
everyother[0] = 1;
for (var i = 1; i < 50; i++) {
    if(everyother[i-1] == 1){
        everyother[i] = 3;
    }
    else{
        everyother[i] = 1;
    }

}

console.log(everyother);

console.log(window.innerHeight + " " + window.innerWidth);
console.log(screen.width);
console.log(screen.colorDepth);
console.log(screen.pixelDepth);
console.log(navigator.appVersion);

var personAge = 25;

if(personAge < 14){
    console.log("Pirk varle");
}
else if (personAge < 18) {
    console.log("Pirk Nokia");
}
else if (personAge < 24) {
    console.log("Eik i Teslos bara");
}
else if (personAge < 65) {
    console.log("Ziurek 24 valandas");
}

if (personAge >= 65) {
    console.log("Eik i sokius Senoli");
} else if (personAge > 14 && personAge <= 65) {
    console.log("Ziurek Simpsonus");
}
