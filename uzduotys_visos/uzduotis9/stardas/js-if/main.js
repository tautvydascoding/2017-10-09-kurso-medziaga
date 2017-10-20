console.log("labas vakaras");

var skaicius1 = 123;
var skaicius2 = 343;

// patikrinti, kuris skaicius didziausias

if (skaicius1 > skaicius2) {
  console.log("skaicius1 yra didziausias");
} else {
  console.log("skaicius2 yra didziausias");
}

var skaicius3 = 999;

// rasti didziausia skaiciu
if (skaicius1 > skaicius2) {
  if (skaicius1 > skaicius3) {
    console.log("skaicius1");
  } else {
    console.log("skaicius3 arba lygus skaicius1");
  }
} else {
  if (skaicius2 > skaicius3) {
    console.log("skaicius2");
  } else {
    console.log("skaicius3 arba lygus skaicius2");
  }
}


// uzduotis isvesti reklamas pagal amziu

var amzius = 65;
if (amzius < 14) {
  console.log("Pliusines varles");
} else if (amzius <= 18){
  console.log("Nokia");
} else if (amzius <= 24){
  console.log("Baras");
} else if (amzius > 24 && amzius < 65) {
  console.log("24 valandos");
  }
if (amzius < 14 || amzius >= 65) {
  console.log("Simpsons");
}
