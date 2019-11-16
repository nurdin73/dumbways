<?php
function cetak_gambar($data)
{
	$a = 0;
	while ($a < $data) {
		for ($i=0; $i < $data; $i++) { 
			if ($i == $a) {
				echo "= &nbsp;";
			} elseif ($i == 2) {
				echo "= &nbsp;";
			} elseif (($a + $i) == 2) {
				echo "= &nbsp;";
			} elseif (($a + $i) == 4) {
				echo "= &nbsp;";
			} elseif (($a + $i) == 6) {
				echo "= &nbsp;";
			} else {
				echo "* &nbsp;";
			}
		} echo "<br>";
		$a++;
	}
}
cetak_gambar(5);