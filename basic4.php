<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Excercise 1</title>
	</head>
	<body>
		<h>Basic Assignment 4</h>
<?php
	$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
	function get_max_and_min($sample){
	$max = $sample[0];
	$min = $sample[0];
	for ($i=0; $i<count($sample); $i++)
	{
		if ($max < $sample[$i])
		{
			$max=$sample[$i];
		}	
		elseif ($min > $sample[$i])
		{
			$min=$sample[$i];
		}
	}
	echo "max =>". $max . ' ' . "min=>" . $min;	
	}
	$output = get_max_and_min($sample)
?>
	</body>
</html>
