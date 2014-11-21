<?php
	$data = file_get_contents($_GET['u']);
	// file_get_contents can retrieve a file or a URL for you
	// may be dangerous some time if you don't filter the ..
	// which may cause directory traversal issue
	echo $data;
?>
