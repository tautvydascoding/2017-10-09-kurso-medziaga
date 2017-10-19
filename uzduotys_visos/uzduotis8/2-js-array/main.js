console.log("labas vakaras");


//===========mokomes deti i masyvo gala===========
var bag = ["kate", "pledas"];
// i masyvo gala
bag.push("gitara");
// arba
var ilgis = bag.length;
bag[ ilgis ] = "degtukai";

console.log("push:", bag);

// saliname last item
bag.pop();
console.log("pasalinam paskutinta:", bag);


//===========mokomes dirbti su masyvo pradzia  ===========
bag.unshift("degtukai2");
bag.unshift("degtukai2");
bag.unshift("degtukai2");
console.log("idejome i saraso pradzia:", bag);
bag.shift();  // shift - istrina is masyvo pradzios
bag.shift();
console.log("idejome i saraso pradzia:", bag);
// uzduotis uz pirmo elemento (indeksu "1") ideti "termosa", "prozektorius"
bag.splice(2, 0, "termosa", "prozektorius");
console.log("uz pirmo elemento idedam 2:", bag);
bag.splice(1, 1);
console.log("istrinname kate:", bag);


delete bag[2]; // lieka skyle "undefiend"
console.log("istrinname prozektoriu:", bag);


// copy 3 elementa
var tuscias = bag.slice(2, 5);    //  2- nuo antro   3- iki kelinto (indekso nr)
console.log("Senas sarasas", bag);
console.log("Naujas sarasas", tuscias);

bag = bag.concat(tuscias);  // sujungiu 2 masyvus
console.log("po sujungimo:", bag);

// uzduotis
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
bag.unshift("ziebtuvelis");
console.log("add ziebtuvelis:", bag);
// 3. istrinti 3 elmenta
delete bag[2];
bag.splice(2, 1);
console.log("istriname 3 ir 4", bag);





// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
var sarasas = [];
for (var i = 0; i < 50; i++) {
    sarasas[i] = 0;
}
console.log("sarasas nuliu: ", sarasas);


//
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....


// for (var i = 1; i < sarasas.length; i+=2) {
//     sarasas[i] = 3;
// }
// console.log("sarasas su 3: ", sarasas);

// arba
for (var i = 1; i < 26; i++) {
    sarasas[ (i*2)-2 ] = 1;
    sarasas[ (i*2)-1 ] = 3;
}
console.log("sarasas su 3: ", sarasas);

//  5.2: kas penkta ^ masyvo elementa pakeisti i "99"








//
