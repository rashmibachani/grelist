<?php

$username="user_971db7b5";
$password="pA3mg5iN;(5_10";
$hostname="10.194.111.8";

$x=mysql_connect($hostname, $username, $password);
if(!$x)
	die("Error".mysql_error());
else
{
	echo "nailed it!!!";


$q="Select * from db_971db7b5.wordlist";
$r=mysql_query($q);
if(!$r)
	die("Error in select query: ".mysql_error());
else
	{
	$n=mysql_num_rows($r);
	for($i=0;$i<$n;$i++)
	{
	  $tmp[$i]=mysql_fetch_row($r);
	  var_dump($tmp[$i]);
	}

	}
}
?>