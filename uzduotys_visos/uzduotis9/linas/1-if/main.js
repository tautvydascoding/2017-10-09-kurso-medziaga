console.log("labas vakaras");

var skaicius1 = 123;
var skaicius2 = 43;

//uzduotis kuris sk didziuasias

if ( skaicius1 > skaicius2) {
  console.log("skaicius1 it\'s dizdiausias");

} else {

  console.log("skaicius2 it\'s dizdiausias");
}

var skaicius3 = 987;
//rasti dizdiuaisia skaiciu
if (skaicius1 > skaicius2) {
  if ( skaicius1 > skaicius3 ) {
    console.log("skaicius1");
  } else {
    console.log("skaicius3 arba lygus skaicius1");
  }

} else {
  if (skaicius2 > skaicius3){
    console.log("skaicius2");

  } else {
    console.log("skaicius3 arba lygus skaicius2");
  }
}




// plusines varles <14
//nokia 399 14-18
// teslos baras 18- 24
// 24 valandos >24
// senioru akcijos >65

// <14 ir >65 simsonai


var age = 6;

 if (age < 14) {
  //  console.log("varles");

 } else {
   if ( age < 18) {
     console.log("Nokia");
   } else {
     if ( age < 24) {
       console.log("baras");
     } else {
       if ( age > 24 && age < 65) {
         console.log("24 val");

       } else {
         console.log("sokiai");
       }
     }
   }
 }



 if (age < 14 || age > 65) {
   console.log("simsonai");
   if (age > 65) {
     console.log("sokiai");

   }else {
     console.log("varles");
   }
   }


   
