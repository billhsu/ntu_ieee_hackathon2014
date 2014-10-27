<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db	= "ringdb";

	
	mysql_connect($dbhost, $dbuser, $dbpass) or die("Connection Failed"); 
	mysql_select_db($db) or die("Failed to select database"); 

	$email = $_GET['email'];
	$size = $_GET['size'];

	$query = "INSERT INTO userinfo VALUES(null,'".$email."','".$size."',null)"; 

	$result = mysql_query($query);
	echo "Email: ".$email."<br/>Size(US): ".$size."<BR/>";

?>

<a href="#" onclick="window.close();">close</a>
