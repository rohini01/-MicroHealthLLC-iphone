<?php

$connection = mysql_connect("localhost", "siliconw_micro", "modem123silicon");
$db = mysql_select_db("siliconw_micro", $connection);

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$company=$_POST['company'];
$vreason=$_POST['vreason'];
$vperson=$_POST['vperson'];
$citizen=$_POST['citizen'];
$classified=$_POST['classified'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM customer WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into customer(name,phone,email,company,vreason,vperson,citizen,classified,timein,timeout) values ('$name','$phone','$email','$company','$vreason','$vperson','$citizen','$classified','$timein','$timeout')"); // Insert query
if($query){
echo "You have Successfully Submitted.....";
}else
{
echo "Error....!!";
}
}else{
echo "This Person is already with Us...";
}
}
mysql_close ($connection);
?>

