<?php
	$a = array();
	$a[0] = 100;
	$a[] = 'Kerker';
	$a['haha'] = array(
		0 => "零",
		1 => "一",
		'bla' => 3
	);
	echo "<pre>";
	print_r($a);
?>
