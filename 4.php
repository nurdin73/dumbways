<?php

function hitungVoucher($jml_uang)
{
	if ($jml_uang >= 40000) {
		$jml_harus_dibayar = $jml_uang * (30 / 100);
		$diskon = $jml_uang * (30 / 100);
		$kembalian = $jml_uang - $diskon;
		echo "Uang Yang Harus Dibayar : $jml_harus_dibayar <br>";
		echo "Diskon : $diskon <br>";
		echo "Kembalian : $kembalian <br>";
	} elseif($jml_uang <= 30000) {
		$jml_harus_dibayar = $jml_uang * (50 / 100);
		$diskon = $jml_uang * (50 / 100);
		$kembalian = $jml_uang - $diskon;
		echo "Uang Yang Harus Dibayar : $jml_harus_dibayar <br>";
		echo "Diskon : $diskon <br>";
		echo "Kembalian : $kembalian <br>";
	}
}
hitungVoucher(30000);