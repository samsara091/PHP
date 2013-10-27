<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Excercise 1</title>
	</head>
	<body>
		<select>
<?php
	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
	for($i=0; $i<count($states); $i++)
	{
		echo "<option value='$states[$i]'>$states[$i]</option>";
	}
?>
		</select>
		<select>
<?php
	foreach($states as $state)
	{
		echo "<option value='$state'>$state</option>";
	}
?>
		</select>

		<select>
<?php
	array_push($states, "NY","DE","NJ");
	foreach($states as $state)
	{
		echo "<option value='$state'>$state</option>";
	}
?>
		</select>
	</body>
</html>
