<?php
$connection = mysql_connect("localhost", "siliconw_micro", "modem123silicon");
$db = mysql_select_db("siliconw_micro", $connection);
$query ="SELECT * FROM company";
$results = mysql_query($query);

	<option value="">Select People</option>
<?php
	foreach($results as $people) {
?>
	<option value="<?php echo $people["fname"]; ?>"><?php echo $people["fname"]; ?></option>
<?php
	}
?>