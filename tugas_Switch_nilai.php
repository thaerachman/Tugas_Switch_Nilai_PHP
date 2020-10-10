<?php

$nilai = 1;
switch (true) {
	case ($nilai > 80 && $nilai <= 100):
		echo "Nilai Mutu A";
		break;
	case ($nilai > 70 && $nilai <80):
		echo "Nilai Mutu B";
		break;
	case ($nilai > 60 && $nilai <70):
		echo "Nilai Mutu C";
		break;
	case ($nilai >= 0 && $nilai <60):
		echo "Nilai Mutu D";
		break;
	default:
		echo "Tidak ada Nilai";
		break;
}

?>