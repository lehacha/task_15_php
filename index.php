<!DOCTYPE html>
<html>
	<head>
		<title>15</title>
	</head>
	<body>
	<?php
	function runMyFunction() {
		$text = $_GET['user_text'];
		for($i = 0; $i < iconv_strlen($text); $i++)
		{
			if(is_numeric($text[$i])) echo $text[$i]."  ";
		}
	}

	if (isset($_GET['user_text'])) {
		if($_GET['user_text'] > "")runMyFunction();
	}
	?>
	<div id="user_date" style="padding:20px">
		<p>Input any symbols:</p>
		<form action="index.php">
			<input type="text" name="user_text">
			<input type="submit">
		</form>
	</div>
	<div id="user_date" style="padding:20px">
		<p>Input your email:</p>
		<form action="index.php">
			<input type="email" name="user_email">
			<input type="submit">
		</form>
	</div>
	<?php
		for($i = 0; $i <= 1000; $i++)
		{
			if($i > 3)
			{
				$k = 0;
				for($j = 2; ($j < $i) and $k == 0; $j++)
				{
					if(($i % $j) == 0) 
					{
						$k++;
					}
				}
				if($k == 0)echo "<p style='color: red;float:left;padding-right:3px;padding-bottom:7px;'>".$i."</p>";
				else echo "<p style='color:green;float:left;padding-right:3px;padding-bottom:7px;'>".$i."</p>";
				
			}
			else
			{
				echo "<p style='color: red;float:left;padding-right:3px;padding-bottom:7px;'>".$i."</p>";
			}
		}
	?>
	</body>
</html>