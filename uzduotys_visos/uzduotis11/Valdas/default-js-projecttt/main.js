console.log("labas vakaras");
//try-catch

//default reiksmes function dalinti(x=1; x=1) {}

function dalinti(x, y=1) {
    if (typeof y == "number" && typeof x == "number") {
        if (y!=0) {
            return x/y;
        } else {
            return "Dalyba iš 0 negalima";
        }
    } else {
        return "Įveskite x ir y";
    }
}

function dalinti(x, y=1) {
    var rez=0;
    try {
        if (typeof y == "number" && typeof x == "number") {
            if (y!=0) {
                return x/y;
            } else {
                throw( "dalyba iš 0 negalima");
            }
        } else {
            throw("įveskite skaičius x ir y");
        }
    } catch (e) {
        return "Įvyko klaida: " + e;
    } finally {                             // try-catch finally ivyksta bet kokiu atveju
        console.log("Skaičiavimai baigti");
    }
}
