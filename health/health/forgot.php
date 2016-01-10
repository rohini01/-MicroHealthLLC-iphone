<?php
$connection = mysql_connect("localhost", "siliconw_micro", "modem123silicon");
$db = mysql_select_db("siliconw_micro", $connection);
$email=$_POST['email1']; // Fetching Values from URL.
//$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
// Matching user input email and password with stored email and password in database.
$result = mysql_query("SELECT password FROM user WHERE email='$email'");
$row=mysql_fetch_array($result);
$password=$row['password'];
$data = mysql_num_rows($result);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$Subject="Please Find Your Password";
if($data==1){
mail($email, $Subject, $password, $headers);
echo "Your Password Sent to Your Mail...";
}else{
echo "Email Not Exists...!!!!";
}
}
mysql_close ($connection); // Connection Closed.
?>

