<?php
          $connection = mysql_connect("localhost", "siliconw_micro", "modem123silicon");
$db = mysql_select_db("siliconw_micro", $connection);

$result=mysql_query("select * from company");

echo "<table border='1' >
<tr>
<td align=center> <b>First name</b></td>
<td align=center> <b>Email</b></td>
<td align=center><b>Mobile</b></td>";

while($data = mysql_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[1]</td>";
   	echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
   
    echo "</tr>";
}
echo "</table>";
?>