console.log("labas vakaras");

// kuriame objekta



console.log(formData);


var form = $('form')[0]; // jQuery selektorius viska sudeda i masyva
form.addEventListener("submit", patikrinkIvedimoLaukus(event))

function patikrinkIvedimoLaukus(event) {
  console.log("forma suveike");
  event.preventDefault();  // !!!!

  // kuriame objekta

  var formData = { };
    formData.vardas = $('form input[name="name"]').val();
    formData.elpastas = $('form input[name="email"]').val();
    formData.slaptazodis = $('form input[name="pass"]').val();
    console.log(formData);
}

for (var i = 0; i < array.length; i++) {
  array[i]
}
