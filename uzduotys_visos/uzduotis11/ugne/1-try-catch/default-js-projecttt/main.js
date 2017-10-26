console.log("labas vakaras");

//try-catch

//1 UZD
//sukurti funkcija, kuri padalina dvi reiksmes ir grazina rezultata
//pvz. dalinti (x, y)

function dalinti(x=1, y=1) {//apsauga, priskiriama default reiksme jei pamirstama ivesti ja;
    var rez = 0;
    try { //try tikrina ar nera klaidos, klaidu ieskojimui
        if (isNaN(x) || isNaN(y) || y===0) {
            throw "Klaida, patikrinkite reiksmes"; //ismetam klaida;
        } else {
            rez = x / y; //local kintamasis
            return rez;
        }  
    }
    catch (e) {
        //rezultatai rastu klaidu
        /*alert("ivyko klaida:", e.description); //ivykus klaidai ismeta alert*/
        //e turi ir daugiau komandu;
        console.warn(e);
    }  
    //naudojamas tik su try-catch; neprivalomas;
    //visada vykdomas, nesvarbu klaida ar ne;
    //gaudant errors, nes juos sunku sugaudyt;
    finally {
        return rez;
    }
}

var rezultatas = dalinti (100, 5);
console.log("rezultatas", rezultatas);

//2 UZD
//ideti apsauga dalybai

var rezultatas = dalinti(100, "tekstas");
console.log("rezultatas", rezultatas);