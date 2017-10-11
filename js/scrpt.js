function add() {
    console.log('add');
    var originalPrice = document.getElementById('priceHolder');
    var increase = document.getElementById('price');
    var actualPrice = parseFloat(originalPrice.innerHTML) + parseFloat(increase.value);
    originalPrice.innerHTML = actualPrice;
}

function sub() {
    console.log('sub');
    var originalPrice = document.getElementById('priceHolder');
    var increase = document.getElementById('price');
    if (increase.value > originalPrice.innerHTML) {
        var actualPrice = parseFloat(originalPrice.innerHTML) - parseFloat(increase.value);
        originalPrice.innerHTML = actualPrice;
    } else {
        alert('Price cannot be higher than original');
    }

}