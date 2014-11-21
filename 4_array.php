<?php
	$a = array();
	// initialize an empty array
	$a[0] = 100;
	// assign value to position 0
	$a[] = 'Kerker';
	// push new item to back of array
	$a['haha'] = array(
		0 => "零",
		1 => "一",
		'bla' => 3
	);
	// initialize an array in 'haha' of $a
	echo "<pre>";
	// preserve format, including new line
	print_r($a);
	// print out whatever structure it is
?>
