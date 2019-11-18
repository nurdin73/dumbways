<?php
$data = [1,2,3,4,5];
function hitung($data)
{
	$count = [];
	for ($i=1; $i <= count($data); $i++) { 
		$nilai = 0;
		$temp = [];
		for ($x=1; $x <= count($data); $x++) { 
			if ($x !== $i) {
				$nilai += $x;
				$temp[$x] = $x;
			}
		}
		$count[$i] = $nilai;
	}
	echo "Nilai max = ".max($count)."<br> Nilai min = ".min($count);
}
hitung($data);
