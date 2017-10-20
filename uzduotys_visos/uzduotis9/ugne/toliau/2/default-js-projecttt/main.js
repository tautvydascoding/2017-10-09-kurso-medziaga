console.log("labas vakaras");

//masyvas nuo 50 iki 200
var pagamintosDetales = [];

for (var i=0; i<10; i++) {
    var randomNumber = Math.random()*150+50;
    randomNumber = Math.round(randomNumber);
     var randomNo = Math.random()*9+1;
   randomNo = Math.round(randomNo);
   
    if(randomNo===1) {
        randomNumber*=-1;
    }
    pagamintosDetales[i]= randomNumber;
    
  
}
 console.log("pagamintosDetales", pagamintosDetales);