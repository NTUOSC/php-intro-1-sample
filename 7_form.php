<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<form method="GET">
		乘數：<input name="multiplier"><br />
		被乘數：<input name="multiplicand"><br />
		<input type="submit" value="送出">
	</form>
	<br /><br/><br/>
	<?php
		if(!empty($_GET)){
			// ! means NOT
			// enter this block only if user is coming with input
			$result = $_GET['multiplier'] * $_GET['multiplicand'];
			// PHP will automatically cast the two input into integer
			echo "你的算式是: ";
			echo $_GET['multiplier']." x ".$_GET['multiplicand'];
			// Caution: do not print out input directly without filtering
			// user may enter scripts, which may cause Cross-Site Scripting
			echo "<br />";
			echo "答案是: ".$result;
			// Prints out the result
		}
	?>
</body>
</html>
