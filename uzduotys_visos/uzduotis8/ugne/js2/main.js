console.log("labas");
//---

var bag = ["kate", "pledas"];
//---i masyvo gala---
bag.push("maistas");
console.log("push", bag);

//---arba----

var masyvoIlgis = bag.length;
bag[masyvoIlgis] = "degtukai";

console.log("push:", bag);

//---salina elementa gale--
bag.pop();
console.log("salina paskutini elementa:", bag);

//-----priekyje pridedam--
bag.unshift("degtukai2");
bag.unshift("degtukai2");
bag.unshift("degtukai2");

console.log("idejom degtuku: ", bag);

//----priekyje-pasaliname--
bag.shift();
bag.shift();

console.log("isemem degtuku: ", bag);


//----splice--i kuria vieta ideti, kiek istrinti, ka prideti
bag.splice(2, 0, "termosas", "prozektorius");

console.log("uz pirmo elemento pridedam kitu elementu: ", bag);

//---isimam kate (delete paliktu skyle/tuscia vieta)---

bag.splice(1, 1);
console.log("isimam kate: ", bag);


//--istrinam prozektoriu
delete bag[2];
console.log("pametem prozektoriu", bag);


//--istrinti nuo tam tikro elemento, iki kelinto--
var tuscias = bag.slice(2, 5);
console.log("istrinam viena daikta", bag);
console.log("senas bag", bag);
console.log("naujas bag", tuscias);

//masyvu jungimas

bag = bag.concat(tuscias); //sujungia 2 masyvus
console.log("po sujungimo", bag);


//UZD.1 - pradzioj ideti elementa "ziebtuvelis"

bag.unshift("ziebtuvelis");
console.log("pridetas ziebtuv.", bag);

bag.splice(2, 1);
console.log("istrinu termosa:", bag);

//UZD SUkurti masyva (50 ilgumo) naudojant for ir uzpildyti skaiciu 0 (kiekvienas stalcius lygus "0")


bag2 = [];

for (i=0; i<=50; i++) {
   bag2 [i] = 0;
       
}

//----kas antra masyvo elementa pakeisti i "3" [1,3,1,3,1,3]

for (i=0; i<=25; i++) {
    bag2[i*2+1] = 3;
} 

console.log("kas antras", bag2);

//--arba

/*for (var i=1; i<sarasas.lenght; i+=2) {
    sarasas[i] = 3;
}*/

//kas penkta masyvo elementa pakeisti i 99

bag3 = [];

for (i=1; i<=10; i++) {
    bag3[i*5-1] = 99;
}

console.log("kas penktas", bag3);