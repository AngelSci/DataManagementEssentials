<html>
<h1>PHP DB example</h1>
<?php
$db = mysql_connect('localhost','root','');
mysql_select_db('test');
$result = mysql_query("select * from airport_status");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	echo $row['iata_code'] . " ## ";
	echo $row['delay'] . " ## ";
	echo $row['reason'] . " ## ";
	echo $row['avgdelay'] . " ##";
	echo "<p>";
}

?>
</html>