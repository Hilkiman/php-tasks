<?php
$day = 3;
switch ($day) {
case  1:		
case  2:	
case  3 :							
case  4 :		
case  5 :
			echo "Это рабочий день";  //все рабочие дни
		break;
case 6:
case 7:
		echo "А это выходной"; //выходные дни
		break;
default:
		echo "Это левый день"; //левые дни 
		break;
}



?>