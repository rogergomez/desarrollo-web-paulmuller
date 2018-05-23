<?php  
//utilizar if 

$a = 23;
$b = 3;

if ($a < $b ) {
	echo "primer numero es menor";
}elseif ($a > $b) {
	echo "primer numero es mayor";
}

//utilizar switch

echo "<hr>";

$fruta = "mango";

switch ($fruta) {
	case 'banana':
		echo "La banana es deliciosa";
		break;

	case 'mango':
		echo "El mango es sabroso";
		break;

	case 'pera':
		echo "La pera es deliciosa";
		break;
	
	default:
		echo "No encontramos la fruta, o es una verdura?";
		break;
}


 ?>
