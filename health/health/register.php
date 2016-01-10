<?php

$connection = mysql_connect("localhost", "siliconw_micro", "modem123silicon");
$db = mysql_select_db("siliconw_micro", $connection);
$fname=$_POST['fname'];
$lname=$_POST['lname']; 
$mob=$_POST['mob'];
$email=$_POST['email'];
$password= $_POST['password']; 
//$password= sha1($_POST['password']); // Password Encryption, If you like you can also leave sha1.


$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM user WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into user(fname,lname,mob, email, password) values ('$fname', '$lname','$mob','$email', '$password')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection);
?>



