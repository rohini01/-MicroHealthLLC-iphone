<?php
if (isset($_GET['filename']))
{
	$filename=$_GET['filename'].'.wav';
	
	if ($soundfile = file_get_contents('php://input'))
	{
		file_put_contents($filename,$soundfile);
		echo ('
		  <audio autoplay="autoplay" controls="controls">
		  <source src="'.$filename.'" type="audio/x-wav" />
		  </audio>
		  <br />
		  Saved mp3 location : '.dirname(__FILE__).'\\'.$filename.'
		  <br />
		  Saved mp3 uri : <a href="'.$filename.'">'.$_SERVER['SERVER_NAME'].'/webtts/'.$filename.'</a>'
		);
	}
	else echo("<br />Audio could not be saved");
	exit();
}
?>