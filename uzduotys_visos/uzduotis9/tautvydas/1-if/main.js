console.log("labas vakaras");


var skaicius1 = 123;
var skaicius2 = 44;

// pasakyti, kuris skiscius didziausias
if ( skaicius1 > skaicius2 ) {
    console.log('skaicius1 it\'\'s  yra didziausias \n  \t  test');
} else {
    console.log("skaicius2 it\'s  yra didziausias");
}

var skaicius3 = 9999;

// rasti didziausia skaiciu
if ( skaicius1 > skaicius2) {
    if ( skaicius1 > skaicius3 ) {
        console.log("skaicius1 ");
    } else {
        console.log("skaicius3  arba lygus skaicius1");
    }

} else {
    if ( skaicius2 > skaicius3) {
        console.log("skaicius2");
    } else {
        console.log("skaicius3  arba lygus skaicius2");
    }
}


var age = 12;
if ( age < 14 || age > 65) {
    console.log("Simsonus");
    if( age < 14) {
        console.log("Pliusines varles");
    } else { // pensininkai
        console.log("Sen. sokiai");
    }
} else if ( age > 14 && age < 18 ) {
    console.log("Nokia 399");
} else if (true) {

}


// ==========switch===========
