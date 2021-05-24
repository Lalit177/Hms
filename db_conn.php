<?php



$sname= "remotemysql.com";
 $uname= "AT8NDD3kb9";
$password = "TziiijNTBo";





$db_name = "AT8NDD3kb9";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>
