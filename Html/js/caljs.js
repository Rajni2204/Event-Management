var d_prices = new Array();
d_prices["df"] = 1000;
d_prices["db"] = 1500;

function flPrice() {
    var fPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includef"
    var includef1 = theForm.elements["includef"];

    //If they checked the box set flower to 10
    if (includef1.checked == true) {
        fPrice = 1000;
    }
    //finally we return the candlePrice
    return fPrice;
}

function blPrice() {
    var bPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includef"
    var includeb1 = theForm.elements["includeb"];

    //If they checked the box set ballon to 15
    if (includeb1.checked == true) {
        bPrice = 1500;
    }
    //finally we return the candlePrice
    return bPrice;
}

var c_prices = new Array();
c_prices["breakfast"] = 2000;
c_prices["lunch"] = 15000;
c_prices["dinner"] = 20000;

function bfPrice() {
    var breakfPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includebf"
    var includebf1 = theForm.elements["includebf"];

    //If they checked the box set breakfast to 100
    if (includebf1.checked == true) {
        breakfPrice = 2000;
    }
    //finally we return the candlePrice
    return breakfPrice;
}

function clPrice() {
    var clPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includef"
    var includecl1 = theForm.elements["includecl"];

    //If they checked the box set ballon to 15
    if (includecl1.checked == true) {
        clPrice = 15000;
    }
    //finally we return the candlePrice
    return clPrice;
}

function dnPrice() {
    var dnPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includef"
    var includecl1 = theForm.elements["includedn"];

    //If they checked the box set ballon to 15
    if (includecl1.checked == true) {
        dnPrice = 20000;
    }
    //finally we return the candlePrice
    return dnPrice;
}

var o_prices = new Array();
o_prices["dj"] = 25000;
o_prices["sd"] = 11000;
o_prices["ph"] = 12000;

function djPrice() {
    var djPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includebf"
    var includedj1 = theForm.elements["includedj"];

    //If they checked the box set breakfast to 100
    if (includedj1.checked == true) {
        djPrice = 10000;
    }
    //finally we return the candlePrice
    return djPrice;
}

function sdPrice() {
    var sdPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includef"
    var includesd1 = theForm.elements["includesd"];

    //If they checked the box set ballon to 15
    if (includesd1.checked == true) {
        sdPrice = 11000;
    }
    //finally we return the candlePrice
    return sdPrice;
}

function phPrice() {
    var phPrice = 0;
    //Get a reference to the form id="hform"
    var theForm = document.forms["hform"];
    //Get a reference to the checkbox id="includef"
    var includeph = theForm.elements["includeph"];

    //If they checked the box set ballon to 15
    if (includeph.checked == true) {
        phPrice = 12000;
    }
    //finally we return the candlePrice
    return phPrice;
}



//candlesPrice() finds the candles price based on a check box selection


function calculateTotal() {
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var finalPrice = flPrice() + blPrice() + bfPrice() + clPrice() + dnPrice() + djPrice() + sdPrice() + phPrice();

    //display the result
    var divobj = document.getElementById('totalPrice');
    var divobj1 = document.getElementById('wrap');
    divobj.style.display = 'block';
    divobj.innerHTML = "Total Price For decorations Rs.=" + finalPrice;

}

function hideTotal() {
    var divobj = document.getElementById('totalPrice');
    var divobj1 = document.getElementById('wrap');
    divobj.style.display = 'none';
}

function hideAll() {
    document.getElementById("id1").style.display = "none";
    document.getElementById("id2").style.display = "none";
}

function show(elementId) {
    hideAll();
    document.getElementById(elementId).style.display = "block";
}