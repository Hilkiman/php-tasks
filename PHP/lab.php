<?php
$z2 = array(					// Первый массив с именами 
	
		1 => "Вася Васильевич",
		2 => "Петр Петрович",
		3 => "Артём Артёмович",
	);

$z3 =array(					// Второй массив с праздниками
		1 => "День рождения",
		2 => "Новый год",
		3 => "Шабаш",
);
$ch = array(					// Третий массив с датами
	1 => 11,
	2 => 1,
	3 => 30,
);
$m = array(					// Четвертый массив с месяцами
	1 => "января",
	2 => "апреля",
	3 => "мая",
);
const x = "С уважением, Антон";			// константа

#далее вывод

echo "Уважаемый, " . $z2[1] . "\n";
echo "Приглашаем Вас на " . $z3[3] . "\n";
echo "Дата события: " . $ch[3] . " " . $m[2] . "\n";
echo x;
?>