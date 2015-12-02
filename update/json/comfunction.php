<?php

/**************DB Queries functions**********************/

function Run($qry)
{
	$run=mysql_query($qry);
	return $run;
}

function numRows($qry)
{
	$n=mysql_num_rows($qry);
	return $n;
}

function getRows($qry)
{
	$fr=mysql_fetch_array($qry);
	return $fr;
}

function userExist($qry)
{
	$run=Run($qry);
	if($run){
		return numRows($run);
	}else{
		return '1';
	}
}


/**************Custom functions**********************/

function flag($val)
{
	$row=array('flag'=>$val,);
	echo '{"items":[';
	echo json_encode($row);
	echo ']}';
}

function makeJson($val)
{
	echo '{"items":';
	echo json_encode($val);
	echo '}';
}


function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "M") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

function upload($uploadfile1,$front_tmp,$file1)
{
	//-----------------------if already exist-------------------------------------- 
	$additional = md5(rand());
	while (file_exists($uploadfile1)) {
		//unlink($uploaddir.$image);
		$info = pathinfo($uploadfile1);
		$uploadfile1 = $info['dirname'] . '/'
			  . $info['filename'] . $additional
				  . '.' . $info['extension'];
		$file1=$info['filename'] . $additional.'.'.$info['extension'];
	}

	
	move_uploaded_file($front_tmp, $uploadfile1);
	
	return $file1;
	
}

function getSize($arr)
{
	$s=sizeof($arr);
	return $s;
}

function updateVersion()
{
	$qry="UPDATE versions SET  `versionno` =  `versionno` +1 WHERE id ='1'";
	$run=Run($qry);
}
function getVersion()
{
	$qry="select versionno from versions WHERE id ='1'";
	$run=Run($qry);
	$fr=getRows($run);
	$info['versionNo']=$fr['versionno'];
	return $fr['versionno'];
}

function sendEmail($type,$email)
{
	$subject = 'Email verification link';
	$message = 'Congratulation your account is successfully created. please confirm the following link to access your account.\n '."\n\n".
'http://siliconwebsolution.com/project/json/verification.php?type='.$type.'&email='.$email;

	$headers = 'From: noreply@example.com' . "\r\n" .
    'Reply-To: noreply@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email, $subject, $message, $headers);
}


?>