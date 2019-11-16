<?php
function generate()
{
	$template = "xx99-9xx9-x99x-99xx";
	$length = strlen($template);
	$serial = "";
	for ($i=0; $i < $length; $i++) { 
		switch ($template[$i]) {
			case 'x':
				$serial .= chr(rand(65,90));
				break;
			case '9':
				$serial .= rand(0,9);
				break;
			case '-':
				$serial .= '-';
				break;
			default:
				# code...
				break;
		}
	}
	return $serial;
}
for ($i=1; $i <= 3; $i++) {
	$sn = generate(); 
	echo "$i. SN : <span style='text-transform:lowercase;'>$sn</span> <br>";
}