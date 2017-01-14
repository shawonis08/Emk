<?php

$localhost="localhost";
$root="root";
$password="";

$conn= mysql_connect($localhost,$root,$password);

if(!$conn){
	die("connection failed: ");
}
else 
	echo "ok!";

$db=mysql_select_db("testform",$conn);
if(!$db){
	echo "can't connect with database";
}

?>