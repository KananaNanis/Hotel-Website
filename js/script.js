// 
function validate(form){
	if(form.name.value == "") {
		alert("Error: Name cannot be blank!");
		form.name.focus();
		return false;
	}
	
	if(form.email.value == "") {
		alert("Error: Email address cannot be blank!");
		form.email.focus();
		return false;
	}
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	if(!mailformat.test(form.email.value)) {
		alert("Error: You have entered an invalid email address!");
		form.email.focus();
		return false;
	}
	if(form.phone.value == "") {
		alert("Error: Phone number cannot be blank!");
		form.phone.focus();
		return false;
	}
	var numbers = /^[0-9]+$/; 
	if(!numbers.test(form.phone.value)) {
		alert("Error: Phone Number must have numeric characters only!");
		form.phone.focus();
		return false;
	}
	if(form.phone.value.length < 10 || form.phone.value.length > 10 ) {
		alert("Error: Phone number must be 10 numbers !");
		form.phone.focus();
		return false;
	}
	if(form.street.value == "") {
		alert("Error:Street cannot be blank!");
		form.street.focus();
		return false;
	}
	if(form.city.value == "") {
		alert("Error:City cannot be blank!");
		form.city.focus();
		return false;
	}
	if(form.post_code.value == "") {
		alert("Error:Post code cannot be blank!");
		form.post_code.focus();
		return false;
	}
	if(form.country.value == "") {
		alert("Error:Country cannot be blank!");
		form.country.focus();
		return false;
	}
	var e = document.getElementById("people");
	var pple = e.options[e.selectedIndex].value;

	var pple = e.options[e.selectedIndex].text;
	if(pple==0)
	{
		alert("Please select the number of people!");
		return false;
	}
	var r = document.getElementById("room");
	var rm = r.options[r.selectedIndex].value;

	var rm = r.options[r.selectedIndex].text;
	if(rm==0)
	{
		alert("Please select room!");
		return false;
	}
	// var p = document.getElementById("payment");
	// var pay = p.options[p.selectedIndex].value;

	// var pay = p.options[p.selectedIndex].text;
	// if(pay==0)
	// {
	// 	alert("Please select payment mode!");
	// 	return false;
	// }
	// if(pay==2){
		if(form.card_num.value == "") {
			alert("Error:Enter your card number");
			form.card_num.focus();
			return false;
		}
		if(form.card_num.value.length < 16|| form.phone.value.length > 16) {
			alert("Error:Invalid card number");
			form.card_num.focus();
			return false;
		}
	// }
	// if(pay==1){
	// 	if(form.cash.value=="") {
	// 		alert("Error:Enter Amount");
	// 		form.cash.focus();
	// 		return false;
	// 	}
	

	// window.location.replace("confirm.html");
	// return false;
}
//Function To Display Popup
function div_show() {
	document.getElementById("abc").style.display = "block";
}
//Function to Hide Popup`
function div_hide(){
	document.getElementById("abc").style.display = "none";
}