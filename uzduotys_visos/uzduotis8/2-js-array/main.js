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



//
