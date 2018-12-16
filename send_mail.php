<?php
	
	$to = "nishatsayyed26@gmail.com";
	$subject = "My subject";
	$txt = "Hello world!";
	$headers = "From: nishatsayyed26@gmail.com" . "\r\n";
	
	mail($to, $subject, $txt, $headers);
	
	echo "sent";
?>