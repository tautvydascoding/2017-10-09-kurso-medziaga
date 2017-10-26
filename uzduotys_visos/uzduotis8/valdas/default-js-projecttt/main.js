console.log("labas vakaras");

var bag = ["kate", "pledas"];

bag.push("gitara");

console.log("push:", bag);

var sarasoIlgis=bag.length;

bag[sarasoIlgis] = "degtukai";

console.log(bag);

bag.pop();

console.log(bag);

bag.unshift("degtukai2");
bag.unshift("degtukai2");
bag.unshift("degtukai2");
console.log(bag);

bag.shift();
bag.shift();
console.log(bag);

bag.splice(2,0,"termosas", "prozektorius");
console.log(bag);

bag.splice(1,1);
console.log(bag);

delete bag[2];
console.log(bag);

var tuscias=bag.slice(2,3);
console.log(tuscias);


bag=bag.concat(tuscias);
console.log(bag);

bag.unshift("ziebtuvelis");
bag.splice(2,1);

console.log(bag);

var a=[];
for(var i =0; i<50; i++ ) {
    if(i%2===0) {
        a[i]=1;
    } else {
        a[i]=3;
    }
}
console.log(a);

var b=[];
for (var i = 0; i < 50; i+=2) {
 b[i]=1;
 b[i+1]=3;
}

console.log(b);

for (var i = 4; i < 50; i+=5) {
    a[i]=999;
}
console.log(a);
