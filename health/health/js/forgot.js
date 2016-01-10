$(document).ready(function(){
$("#forgot").click(function(){
var email = $("#email").val();
// Checking for blank fields.

$.post("forgot.php",{ email1: email},
function(data) {
if(data=='Invalid Email.......') {
$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
alert(data);

}else{
alert(data);
window.location = 'login.html';
}
});

});
});