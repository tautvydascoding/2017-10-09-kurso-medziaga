console.log ("Labas");
// ====mokomes deti i  masyco gala====
var bag = ["kate", "pleda"];
// i masyvo gala
bag.push("gitara");// idedame elementa i masyvo pabaiga
//arba
var ilgis = bag.length;
bag[ ilgis] = "degtukai";

console.log("push: ", bag);

// saliname last item
bag.pop();// istrinam is masyvo paskutini elementa
console.log("pop; ", bag);

// =========mokomes dirbti su masyvo pradzia==

bag.unshift("degtukai2"); // ideda i masyvo pradzia
bag.unshift("degtukai2");
bag.unshift("degtukai2");
console.log("unshift: ", bag);

bag.shift();// istrina is masyvo prazdios
bag.shift();
console.log("shift: ", bag);


bag.splice(2,0,"termosas", "prozektorius");
console.log("splice: ", bag); // uz 1 elemento idejom du naujus elementus.
bag.splice(1,1);
console.log("Istriname kate: ", bag);// istriname kate

delete bag[2];
console.log("Istriname prozektoriu: ", bag);// lieka emty space, svarbu jei nenori keisti masyvo eiles

var tuscias = bag.slice(2,5); //kopijuoja, butina salyga var tuscias!!!
console.log("slice: ", tuscias);


bag = bag.concat(tuscias); //sujungiu du masyvus
console.log("concat-sujungi: ", bag);


// uzduotis2


bag.unshift("ziebtuvelis");
console.log("unshift: ", bag);

//uzduotis 3 istrinti 3 elementa

bag.splice(2,1);
console.log("spice-istrinti:",bag);
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
for (var i = 0; i < 50; i++) {
  bag[i] = 0;
}
console.log(bag);
//5.2: kas antra ^ masyvo elementa pakeisti i "3"

// for (var i = 1; i < bag.length; i+=2) {
//   bag[i] = 3;
// }
// console.log(bag);
// for (var i = 0; i < 25; i++) {
//   bag[i*2+1] = 3;
// }
// console.log(bag);

//kas 5 i 99

// for (var i = 4; i <bag.length; i+=5) {
//   bag[i]= 99;
// }
// console.log(bag);
//
for (var i = 0; i < 11; i++) {
  bag[i*5-1] = 99;
}
console.log(bag);
