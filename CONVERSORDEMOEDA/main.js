const endpoint = "http://data.fixer.io/api/latest?access_key=e87bcbcd50b696e0ef61840ac4d544a4";

const eurofield = document.querySelector(".euro");
const realfield = document.querySelector(".real");

/// fetch realiza conversão de euro para real usando o API fixer.io
function conversor (){

    fetch(endpoint)
    .then( Response => Response.json())
    .then(date => {
        const euroAmount = date.rates.BRL;
        const euro = eurofield.value;
        const real = (euro * euroAmount). toFixed(2);
        realfield.value = real;

    });
   
}
    document.querySelector(".convertbutton").addEventListener("click",conversor);
    eurofield.addEventListener("imput",conversor);
