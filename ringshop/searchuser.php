<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db	= "ringdb";
$isUserExist = False;

	
	mysql_connect($dbhost, $dbuser, $dbpass) or die("Connection Failed"); 
	mysql_select_db($db) or die("Failed to select database"); 

	$name = $_POST['inputname'];
 
	$query = "SELECT * FROM userinfo where username = '$name'"; 
	$result = mysql_query($query); 

	while ( $user = mysql_fetch_array($result) )
	{
		if ($name == $user['username'])
		{
			echo json_encode($user['ringsize']);
			$isUserExist = True;
			break;
		}
	}

	if (!$isUserExist)
	{
		echo json_encode("User does not exist");
	}
	
	
//	if (!$result) 
//	{ 
//    		die('Invalid query: ' . mysql_error());
//	}
//	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
//		 echo json_encode($line['ringsize']);
//	} 
	 
?> 
