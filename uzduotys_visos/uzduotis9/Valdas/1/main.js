console.log("labas vakaras");

var detales=[];

for (var i = 0; i < 500; i++) {
    detales[i] = Math.round(Math.random() * 150 + 50);
}

for (var i = 0; i < detales.length; i++) {
    var tikimybe = Math.random()*100;
    if (tikimybe <= 10) {
        detales[i] *= (-1);
    }
}

console.log(detales);

for (var i = 0; i < detales.length; i++) {
    detales[i]=Math.abs(detales[i]);
}

console.log(detales);

var best = detales[0];
var workers=[];

for (var i = 0; i < detales.length; i++) {
    if(detales[i] === best && typeof detales[i] == "number") {
        workers.push(i);
    } else if (detales[i]>best && !isNaN(detales[i])) {
        best = detales[i];
        workers=[i];
    }
}

console.log(best, workers);
