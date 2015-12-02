$(document).ready(function() {
$("#customer").click(function() {
							  
var name = $("#name").val();
var email = $("#email").val();
var phone = $("#phone").val();
var company = $("#company").val();
var vreason = $("#vreason").val();
var vperson = $("#vperson").val();
var citizen = $("#citizen").val();
var classified = $("#classified").val();
var timein = $("#timein").val();
var timeout = $("#timeout").val();
 
if ((phone.length) >= 10) {
alert("Phone should atleast 10 character in length...!!!!!!");
}  else {
	
$.post("http://siliconwebsolution.com/microhealth/rahul/customer.php", {
name: name,
phone: phone,
email: email,
company: company,
vreason: vreason,
vperson: vperson,
citizen: citizen,
classified: classified,
timein: timein,
timeout: timeout
}, function(data) {
if (data == 'You have Successfully Submitted Data.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});








