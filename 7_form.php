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
			$result = $_GET['multiplier'] * $_GET['multiplicand'];
			echo "你的算式是: ";
			echo $_GET['multiplier']." x ".$_GET['multiplicand'];
			echo "<br />";
			echo "答案是: ".$result;
		}
	?>
</body>
</html>
