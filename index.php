<html>
<head>
	<title>Vecchi</title>
</head>
<body>
<H1>Hola Mundo</H1>
<?PHP

//echo "Hola PHP";
//echo "<H2> Hola PHP <H2>";

$Numero = 10;

//echo "El número es: " . $Numero . "<br>";
//echo "El número es: $Numero <br>";

//echo "El cambio.";



$vueltas = 10;

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
			$c7 ++;
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
	
echo "Pares: $pares <br>";
echo "Impares: $impares <br>";
echo "El número 1 salió: $c1 <br>";
echo "El número 2 salió: $c2 <br>";
echo "El número 3 salió: $c3 <br>";
echo "El número 4 salió: $c4 <br>";
echo "El número 5 salió: $c5 <br>";
echo "El número 6 salió: $c6 <br>";
echo "El número 7 salió: $c7 <br>";
echo "El número 8 salió: $c8 <br>";
echo "El número 9 salió: $c9 <br>";
echo "El número 10 salió: $c10 <br>";


//echo "Random $random"

?>

</body>
</html>