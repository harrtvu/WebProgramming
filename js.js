function calcTotal(element) {
	var price = element.value * 15.00;
	console.log(price);
	var tax = price * 0.13;
	console.log(tax);
	var total = price + tax;
	console.log(total);
	document.getElementById("price").innerHTML = price.toFixed(2);
	document.getElementById("tax").innerHTML = tax.toFixed(2);
	document.getElementById("total").innerHTML = total.toFixed(2);
}
