<html>
<head>
	<title>Vecchi</title>
</head>
<body>
<H1>Hola Mundo</H1>
<?PHP

echo "Prueba de instalación local <br>";

//echo "Hola PHP";
//echo "<H2> Hola PHP <H2>";

$Numero = 10;

//echo "El número es: " . $Numero . "<br>";
//echo "El número es: $Numero <br>";

//echo "El cambio.";



$vueltas = 100000;

$i = 0;
$pares = 0;
$impares = 0;
$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;
$c6 = 0;
$c7 = 0;
$c8 = 0;
$c9 = 0;
$c10 = 0;


while ( $i < $vueltas) 
{

	$random = (rand(1,10));
	if ($random%2==0){
		$pares ++;
	}
	else{
		$impares ++;
	}


	switch ($random) {
		case '1':
			$c1 ++;
			break;
		case '2':
			$c2 ++;
			break;
		case '3':
			$c3 ++;
			break;
		case '4':
			$c4 ++;
			break;	
		case '5':
			$c5 ++;
			break;	
		case '6':
			$c6 ++;
			break;
		case '7':
		    if (($c7/$vueltas)*100 > 5) {
		    	continue;
		    }
		    else{$c7 ++;}			
			break;
		case '8':
			$c8 ++;
			break;
		case '9':
			$c9 ++;
			break;
		case '10':
			$c10 ++;
			break;			


		default:
			
			break;
	}
	//echo "Random $random <br>";
		$i ++;
}


$c1 = ($c1/$vueltas)*100;
$c2 = ($c2/$vueltas)*100;
$c3 = ($c3/$vueltas)*100;
$c4 = ($c4/$vueltas)*100;
$c5 = ($c5/$vueltas)*100;
$c6 = ($c6/$vueltas)*100;
$c7 = ($c7/$vueltas)*100;
$c8 = ($c8/$vueltas)*100;
$c9 = ($c9/$vueltas)*100;
$c10 = ($c10/$vueltas)*100;


echo "Pares: $pares";
echo "<br>Impares: $impares";
echo "<br>El número 1 salió: $c1%";
echo "<br>El número 2 salió: $c2%";
echo "<br>El número 3 salió: $c3%";
echo "<br>El número 4 salió: $c4%";
echo "<br>El número 5 salió: $c5%";
echo "<br>El número 6 salió: $c6%";
echo "<br>El número 7 salió: $c7%";
echo "<br>El número 8 salió: $c8%";
echo "<br>El número 9 salió: $c9%";
echo "<br>El número 10 salió: $c10%";


//echo "Random $random"

?>

</body>
</html>