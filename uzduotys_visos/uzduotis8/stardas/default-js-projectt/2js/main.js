console.log("labas");

var bag = ["kate", "pledas"];
//i masyvo gala
bag.push("gitara");
//arba
var ilgis = bag.length;
bag[ ilgis ] = 'degtukai';

console.log("push: ", bag);

// saliname last item

bag.pop();
console.log("pasaliname paskutini: ", bag );

// mokomes dirbti su masyvo pradzia

bag.unshift('degtukai2');
bag.unshift('degtukai2');
bag.unshift('degtukai2');
console.log("idejome i saraso pradzia:", bag);
// shift comanda istrina is masyvo pradzios
bag.shift();
bag.shift();
console.log(bag);

// uzduotis uz pirmp elemento (indeksu "1") ideti "termosas", ""prozektorius"
bag.splice(2,0, "termosas", "prozektorius");
console.log("uz pirmo elemento idedame du papildomus elementus: ", bag);
bag.splice(1,1);
console.log("Isimame kate: ", bag);
//istriname prozektorius
delete bag[2]; //lieka skyke "undefined"
console.log("istriname prozektoriu: ", bag);

bag = bag.concat(bag); //sujungiu su masyvus
console.log(bag);

//uzduotis
//2. i masyvo pradzia ideti elementa "ziebtuvelis"
bag.unshift("ziebtuvelis");
console.log(bag);

// 3. istrinti 3 elementa
delete bag[2];
bag.splice(2,1);
console.log("ïstriname 3 ir 4", bag);

//sukurti masyva 50 ilgio naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi buti lygus 0)
var masyvas = [];
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0;
}
console.log(masyvas);

// 5.2 uzduotis kas anttra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3 ....
var skaicius = 50;
for (var i = 1; i < 26; i++) {
  masyvas[(i*2)-2] = 1;
  masyvas[(i*2)-1] = 3;
}
console.log(masyvas);

// 5.3 uzduotis kas penkta ^ masyvo elementa pakeisti i "99"

var skaicius = 50;
for (var i = 4; i < 50; i+=5) {
  masyvas[i] = 99;

  // masyvas[(i*99)] = 5;
}
console.log(masyvas);
