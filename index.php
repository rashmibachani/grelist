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
          var_dump($n);
	}
}
?>

<html>
			<div style="float: none;">&nbsp;</div>
					</div>
					<script type="text/javascript" src="/styles/default/scripts/search-box.js"></script>
					<script type="text/javascript">
					<!--
						document.getElementById('search_box_terms').focus();
					-->
					</script>
					<!-- Should be margin-right: 18px for Firefox, etc. -->
					<div>
						<!-- img src="styles/default/images/home/top-ten-carousel.jpg" alt="Top Ten Lists" style="margin-right: 14px;" / -->

						<script type="text/javascript" src="/top-ten-lists/scripts/top-ten-home-carosel.js"></script>						
						<script type="text/javascript" src="/trend-watch/scripts/trend-watch-home-carosel.js"></script>
					</div>	
</html>