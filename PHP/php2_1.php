<?php
$z1 = array(
	1 => array(			// первый массив
		1 => "1",
		2 => "2",
		3 => "3"),
	2 => array(			// второй массив
		1 => "2",
		2 => "4",
		3 => "6"),
	3 => array(			// третий массив
		1 => "3",
		2 => "6",
		3 => "9"),
);
echo $z1[1][1];				// вывод
echo $z1[1][2];
echo $z1[1][3] . "\n";
echo $z1[2][1];
echo $z1[2][2];
echo $z1[2][3] . "\n";
echo $z1[3][1];
echo $z1[3][2];
echo $z1[3][3];				// конец вывода
?>