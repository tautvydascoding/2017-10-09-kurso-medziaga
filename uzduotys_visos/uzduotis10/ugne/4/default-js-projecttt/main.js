console.log("labas vakaras");

//susikurti 50 ilgio mastyva
var darbuotojai = [];

//uzpildyti atsitiktiniais skaiciais nuo 10 iki 1000;

for(var i=0; i<50; i++) {
    var randomNumber=Math.random()*990+10;
    randomNumber=Math.round(randomNumber);
    darbuotojai[i]=randomNumber;
}

console.log("darbuotoju nr.", darbuotojai);

//surasti pati geriausia rezultata, tada darbuotoja

var didziausiasSk =0; //global
var geriausiodarbuotojoNr = 0;

for (var i=0; i<50; i++) {
    if(didziausiasSk>darbuotojai[i]) {
       } else {
           didziausiasSk=darbuotojai[i];
           geriausiodarbuotojoNr=i;
       }
     /*geriausiodarbuotojoNr = i;*/
    console.log(didziausiasSk);
    console.log("geriausio nr", geriausiodarbuotojoNr);
}

//2UZD
//surasti prasciausia darbutoja

var maziausiasSk=darbuotojai[0];
var blogiausiodarbNr = 0;

for (var i=0; i<50; i++) {

    if(maziausiasSk>darbuotojai[i]) {
        maziausiasSk=darbuotojai[i];
        blogiausiodarbNr=i;
    } else {
        console.log(maziausiasSk);
    }
    
    console.log(maziausiasSk);
    console.log("blogiausio nr", blogiausiodarbNr);
}


//surasti prasciausia kitas vairantas

var min = 99999999999; //var min =darbuotojai[0];
for (var i=0, i<50; i++) {
    if(darbuotojai[i] < min) {
        //radom mazesni sk, tai
        min = darbuotojai[i];
        blogiausiodarbNr = i;
        console.log("siuo metu maziausias", min);
        
    }
}

console.log("prasciausiodarbNr", blogiausiodarbNr);