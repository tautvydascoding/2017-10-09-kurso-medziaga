console.log("labas vakaras");

var garsusZmones = [];

garsusZmones = [
    ["Ona", "Butaite", 1699, "Dvarininke"], //0
    ["Jogaila", "IV", 1865, "Imperatorius"], //1
    ["Xin", "Quan", 298, "Filosofas"]       //2
];

console.log(garsusZmones);

var pirmoVardas = garsusZmones[0][0];  //is kelinto stalciaus paimam ir kuria reiksme;
console.log("pirmo zmogaus vardas", pirmoVardas);

//0 uzd, pakeisti specialybes;

garsusZmones[0][3]= "Karaliene";
garsusZmones[1][3]= "Sventasis";
garsusZmones[2][3]= "Mitologine butybe";

console.log(garsusZmones);

//1UZD - atspausdinti visus garsius zmones ir visa info apie juos
//eis tik per horizontalu masyva, o reikia kad masyvo vidujje horizontaliai vaiksciotu
for (var i=0; i<3; i++) {
    
    for (var k=0; k<garsusZmones[i]; k++) {  //dabar eis ir horizontaliai; reikia ir naujo kintamojo, ne "i"; ir nurodyti per kurio masyvo reiksmes eisim -. garsusZmones[i] arba garsusZmones i<4;
     var info = garsusZmones[i][k];
    console.log(info);
    }
}