<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Excercise 1</title>
	</head>
	<body>
		<h>Starting the program</h>
<?php
	$attempt = 0;
	$count_heads = 0;
	$count_tails = 0;
	for($i=0; $i<5000; $i++)
	{
		$attempt = rand(0,1);
		if($attempt==0)
		{
			$count_heads=$count_heads+1;
			echo "Attempt " . $i . " It's a head! ... Got " . $count_heads . " so far and " . $count_tails . " so far";
		}
		else{
			$count_tails=$count_tails+1;
			echo "Attempt " . $i . " It's a tail! ... Got " . $count_tails . " so far and " . $count_heads . " so far";
		}
		echo"<br/>";
	}
	echo "Heads = " . $count_heads . "<br />";
	echo "Tails = " . $count_tails;
?>
	<h>Ending the program - thank you!</h>
	</body>
</html>
