const tabel = document.getElementById("Boodschappentabel"); //Const variable that refers to the table. (Step 1.1)
const productQuantityArray = document.getElementsByClassName("productQuantity");
const productPriceArray = document.getElementsByClassName("productPrice");
const productTotalCostArray = document.getElementsByClassName("productTotalCost");
const totalCost = document.getElementById("totalCost");

tabel.addEventListener("change", changeNotice);

function changeNotice() {
    let totalPrice = 0;
    console.log('Aantal producten is gewijzigd'); //Log to console that number of products has been changed. (Step 1.2)

    for (let index = 0; index < productQuantityArray.length; index++) { //Do the following for as long as the index is long.
        productTotalCostArray[index].innerHTML = Math.round( 100 * parseFloat(productPriceArray[index].innerHTML) * productQuantityArray[index].value)/100; //Calculate the subtotal of one type of product and round it to two decimals.
        totalPrice = totalPrice+parseFloat(productTotalCostArray[index].innerHTML);
    }

    totalCost.innerHTML = Math.round(100*totalPrice)/100;
}