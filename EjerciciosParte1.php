<html>
<head>
	<title></title>
</head>
<body>

<?PHP

echo "Hola<br><br>";

$i = 1;
$suma = 0;

do {	

	$suma = $suma + $i;
	$i = $i + 1;

} while ( $suma + $i < 1000);

echo " Ejercicio 1 <br><br>";
echo "Suma: $suma <br>";
echo "Cantidad de números sumados: $i <br>";


echo "<br><br> Ejercicio 2 <br><br>";

$date = date("d/m/y");
$date2 = date("d") . " de " . date("M") . " de " . date("Y");
$date3 = date(DATE_RFC1123);

echo "Fecha: $date <br>";
echo "Fecha: $date2 <br>";
echo "Fecha: $date3 <br>";

$day = date("d");
$month = date("m");

if (($month == "06" and $day >= "21") or $month == "07" or $month == "08" or ($month == "09" and $day < "21")) 
{
	echo "<br> Es Invierno <br>";
}

if (($month == "9" and $day >= "21") or $month == "10" or $month == "11" or ($month == "12" and $day < "21")) 
{
	echo "<br> Es Primavera <br>";	
}


if (($month == "12" and $day >= "21") or $month == "01" or $month == "02" or ($month == "03" and $day < "21")) 
{
	echo "<br> Es Verano <br>";	
}


if (($month == "03" and $day >= "21") or $month == "04" or $month == "05" or ($month == "06" and $day < "21")) 
{
	echo "<br> Es Otoño <br>";	
}


echo "<br><br> Ejercicio 3 <br><br>";

$a = 6; $b = 9; $c = 8; $medio = 0;


if (($a > $b and $a < $c) or ($a > $b and $a < $c) ) 
{
	$medio = $a;
 } 

if (($b > $a and $b < $c) or ($b > $a and $b < $c) ) 
{
	$medio = $b;
 }

if (($c > $a and $c < $b) or ($c > $b and $c < $a) ) 
{
	$medio = $c;
 } 

if ($medio <> 0 ) {
	echo "<br> Valor medio: $medio<br>";
}

//TERMINAR EL EJERCICIO



echo "<br><br> Ejercicio 8 <br><br>";

$v = array("1"=>"90", "30"=>"7", "e"=>"99", "hola"=>"mundo");
var_dump($v); //SIRVE PARA VALIDAR QUE SE HAYA GENERADO DE FORMA CORRECTA EL ARRAY

echo "<br>";
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';
var_dump($v); //SIRVE PARA VALIDAR QUE SE HAYA GENERADO DE FORMA CORRECTA EL ARRAY

echo "<br><br>foreach(v as x=>x_value)";
foreach($v as $x=>$x_value)
  {
  echo "<br>";
  echo "Key: $x - Value: $x_value";  
  }

echo "<br><br>foreach(v as x_value)";
foreach($v as $x_value)
  {
  echo "<br>";
  echo "Value: $x_value";  
  }  

?>

</body>
</html>