<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Excercise 1</title>
</head>
<body>
	<h>Score</h>
<?php
	for($i=0; $i<100; $i++)
	{
		$score = rand(50,100);
		if($score<70)
		{
			echo "<h1>Your score is:  $score</h1>";
			echo "<h2>Your grade is:  D </h2>";
		}
		elseif((70<=$score) && ($score<80))
		{
			echo "<h1>Your score is:  $score</h1>";
			echo "<h2>Your grade is:  C </h2>";
		}
		elseif((80<=$score) && ($score<90))
		{
			echo "<h1>Your score is:  $score</h1>";
			echo "<h2>Your grade is:  B </h2>";
		}
		elseif((90<=$score) && ($score<100))
		{
			echo "<h1>Your score is:  $score</h1>";
			echo "<h2>Your grade is:  A </h2>";
		}
		echo $i;
	}
?>
</body>
</html>
