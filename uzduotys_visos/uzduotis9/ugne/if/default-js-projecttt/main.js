console.log("labas vakaras");

var skaicius = 123;
var skaicius2 = 43;
var skaicius3 = 987;

//isvesti didziausia skaiciu is 2

if (skaicius > skaicius2) {
    console.log("skaicius didziausias", skaicius);
}
else {
    console.log("skaicius2 didziausias", skaicius2);
}

//is 3

if (skaicius < skaicius2 && skaicius2< skaicius3) {
   
    console.log(skaicius3);
} else {
    if (skaicius2 < skaicius3 && skaicius3< skaicius) {
    console.log(skaicius);
    }  else {
        console.log(skaicius2);
    }
}

//destytojo

if (skaicius >skaicius2) {
    if (skaicius>skaicius3) {
     console.log("skaicius");  
} else {
     console.log("skaicius3 arba lygus skaicius");
}
} else {   
    if (skaicius2>skaicius3) {
        console.log("skaicius2");
} else {
    console.log("skaicius3 arba lygus skaicius2");
}
}

//UZD1
var age = 25;


if (age <14) {
    console.log("Pliusines varles, Simpsonai");
} else if (14<= age && age<=18) {
    console.log("Nokia399");
    }
    else if (18<= age && age<=24) {
            console.log ("Teslos Baras");
        }
        else if (age>65) {
                console.log ("24 valandos, Simpsonai, senoliu sokiai");
            }
            else if (age>24) {
                    console.log ("24 valandos");
            }

//pasunkinta, negalima isskirti simpsonu

var age= 66; 

    if (age <14 || age>65) { // (or-||)
    console.log("Pliusines varles, Simpsonai, senoliu sokiai, 24vaandos");
        if (age<14) {
            console.log ("vaikai: Pliusines varles, simpsonai");
        }
        if (age>65) {
            console.log ("pensininkai: simpsonai, senoliu sokiai, 24valandos");
        }
} else if (14<= age && age<=18) { //(and - &&)
    console.log("Nokia399");
    }
    else if (18<= age && age<=24) {
            console.log ("Teslos Baras");
        }
            else if (age>24) {
                    console.log ("24 valandos");
                }

//