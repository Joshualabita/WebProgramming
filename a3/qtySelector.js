
function increaseValue() {
var value = document.getElementById("qty").value;
var price = document.getElementById("price").value;

value = isNaN(value) ? 0 : value;
value++;
document.getElementById("qty").value = value;
document.getElementById("subtotal").innerHTML = "$" + (value * price).toFixed(2);
}

function decreaseValue() {
  var value = parseInt(document.getElementById("qty").value, 10);
  var price = document.getElementById("price").value;
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById("qty").value = value;
  document.getElementById("subtotal").innerHTML = "$" + (value * price).toFixed(2);
}
