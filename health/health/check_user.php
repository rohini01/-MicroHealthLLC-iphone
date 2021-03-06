<?php
if(isset($_POST['id']) && !empty($_POST['id']))
{
	include_once 'db.php';
	extract($_POST); // extract post variables

	//check if facebook ID already exits
	$check_user_query = "select * from tbl_users WHERE fld_facebook_id = $id";
	$check_user = $db->getDataFromQuery($check_user_query);
	if(!$check_user)
	{
		//new user - we need to insert a record
		$time = time();
		$insert_user_query = "Insert into tbl_users (`fld_user_name`, `fld_user_email`, `fld_facebook_id`, `fld_user_doj`) VALUES ('$name', '$email', $id, $time)";
		$insert_user = $db->UpdateQuery($insert_user_query);
		echo json_encode($_POST);
	} else {
		//update
		$update_user_query = "update tbl_users set fld_user_name = '$name', fld_user_email='$email' WHERE fld_facebook_id = $id";
		$update_user = $db->UpdateQuery($update_user_query);
		echo json_encode($_POST);
	}
} else {
	$arr = array('error' => 1);
	echo json_encode($arr);
}
?>

<?php
if(isset($_POST['B']) && !empty($_POST['B']) && !empty($_POST['G']))
{

	include_once 'db.php';

	$id = clean_post($_POST['B']); // Google ID
	$email = clean_post($_POST['G']); // Email ID
	$name = clean_post($_POST['ha']); // Name
	$profile_pic = clean_post($_POST['wc']); //Profile Pic URL


	//check if Google ID already exits
	$stmt = $db->prepare("SELECT * FROM tbl_gusers WHERE fld_google_id=:id");
	$stmt->execute(array(':id' => $id));
	$check_user = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(!$check_user)
	{
		//new user - we need to insert a record
		$time = time();
		$insert_user_query = $db->prepare("INSERT INTO tbl_gusers(fld_user_name,fld_user_email,fld_google_id,fld_user_doj) VALUES(:name,:email,:google_id,:doj)");
		$insert_user_query->execute(array(':name' => $name, ':email' => $email, ':google_id' => $id, ':doj' => $time));

		echo json_encode($_POST);
	} else {
		//update the user details
		$update_user_query = $db->prepare("UPDATE tbl_gusers SET fld_user_name=?, fld_user_email=? WHERE fld_google_id=?");
		$update_user_query->execute(array($name, $email, $id));

		echo json_encode($_POST);
	}
} else {
	$arr = array('error' => 1);
	echo json_encode($arr);
}
?>