<!DOCTYPE html>
<html>
<head>
	<title>Gamer4Life - Server Status</title>
</head>
<body>
	<?php 
	function pingAddress($ip) {
    	$host=$ip;
		$output=shell_exec('ping -n 1 '.$host);

		echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

		if (strpos($output, 'out') !== false) {
		    echo "Dead";
		}
		    elseif(strpos($output, 'expired') !== false)
		{
		    echo "Network Error";
		}
		    elseif(strpos($output, 'data') !== false)
		{
		    echo "Alive";
		}
		else
		{
		    echo "Unknown Error";
		}
	}

pingAddress("gamer4Life.net");
	?>
</body>
</html>