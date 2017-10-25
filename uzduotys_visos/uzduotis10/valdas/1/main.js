console.log("labas vakaras");

// 1 uzduotis

class masina {
    constructor(marke, maxSpeed, spalva, durys) {
        this.marke=marke;
        this.maxSpeed=maxSpeed;
        this.spalva= spalva;
        this.durys=durys;
    }

    getMasina() {
        console.log(this);
    }

    getColor() {
        console.log(this.marke + " is " + this.spalva);
    }

    compareTo(otherMasina) {
        if(typeof otherMasina != "undefined") {
            if (this.maxSpeed>=otherMasina.maxSpeed) {
                console.log(otherMasina.marke + " buvo aplenktas");
            } else {
                console.log(this.marke + " buvo aplenktas");
            }
        } else {
            console.log("Nerasta masina palyginimui");
        }

    }
}

var opel = new masina("Opel", 200, "balta", 4);
var peugeot = new masina("Peugeot", 220, "pilka", 4);


opel.compareTo(peugeot);

var marke=peugeot.marke;

switch (marke) {
    case marke="Opel":
        opel.getColor();
        break;
    case marke="Audi":
        audi.getColor();
        break;
    case marke="Peugeot":
        peugeot.getColor();
        break;
    default:
        console.log("nieko nerasta");

}
