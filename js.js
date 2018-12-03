function calcTotal(element) {
	var price = element.value * 15.00;
	var tax = price * 0.13;
	var total = price + tax;
	document.getElementById("price").innerHTML = price.toFixed(2);
	document.getElementById("tax").innerHTML = tax.toFixed(2);
	document.getElementById("total").innerHTML = total.toFixed(2);
	document.getElementById("total2").value = total.toFixed(2);
}

function changeLocation(element) {
	console.log(element.id);
	document.getElementById("location1").style.display = "none";
	document.getElementById("location2").style.display = "none";
	document.getElementById("location3").style.display = "none";
	if(element.id == 1) {
		document.getElementById("location1").style.display = "block";
	} else if(element.id == 2) {
		document.getElementById("location2").style.display = "block";
	} else {
		document.getElementById("location3").style.display = "block";
	}
}
