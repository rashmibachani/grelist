<?php

$username="user_971db7b5";
$password="pA3mg5iN;(5_10";
$hostname="10.194.111.8";

$x=mysql_connect($hostname, $username, $password);
if(!$x)
	die("Error".mysql_error());
else
	echo "nailed it!!!";
?>