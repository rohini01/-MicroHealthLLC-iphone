$(document).ready(function() {
$("#register").click(function() {
var fname = $("#fname").val();
var lname = $("#lname").val();
var mob = $("#mob").val();
var email = $("#email").val();
var password = $("#password").val();
if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
}  else {
$.post("http://siliconwebsolution.com/microhealth/rahul/register.php", {
fname: fname,
lname: lname,
mob: mob,
email: email,
password: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);

window.location = 'http://siliconwebsolution.com/microhealth/rahul/slide1.html';
});
}
});
});