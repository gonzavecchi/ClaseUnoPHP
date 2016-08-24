<html>
<head>
	<title></title>
</head>
<body>

<?PHP

echo " <b><u>Ejercicio 1</u></b> <br><br>";

$i = 1;
$suma = 0;

do {	

	$suma = $suma + $i;
	$i = $i + 1;

} while ( $suma + $i < 1000);


echo "Suma: $suma <br>";
echo "Cantidad de números sumados: $i <br>";

echo "<br>-------------------------------------------";
echo "<br> <b><u>Ejercicio 2</u></b> <br><br>";

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

echo "<br>-------------------------------------------";
echo "<br> <b><u>Ejercicio 3</u></b> <br><br>";

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

echo "<br>-------------------------------------------";
echo "<br> <b><u>Ejercicio 8</u></b> <br><br>";

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


echo "<br><br><br>-------------------------------------------";
echo "<br> <b><u>Ejercicio 9 y 10</u></b> <br>";

$color = "rojo";
$marca = "BIC";
$trazo = "fino";
$precio = "2.50";

$color2 = "verde";
$marca2 = "BIC";
$trazo2 = "grueso";
$precio2 = "3.50";

$color3 = "azul";
$marca3 = "BIC";
$trazo3 = "fino";
$precio3 = "5.50";


$lapicera=array
  (
  array("color"=>$color, "marca"=>$marca, "trazo"=>$trazo, "precio"=>$precio),
  array("color"=>$color2, "marca"=>$marca2, "trazo"=>$trazo2, "precio"=>$precio2),
  array("color"=>$color3, "marca"=>$marca3, "trazo"=>$trazo, "precio"=>$precio3),
  );

echo "<br>var_dump(lapicera)<br><br>";
var_dump($lapicera);
echo "<br><br>";

foreach($lapicera as $x_value)
  {
  	echo "<br>";
  	echo "Lapicera: ";  
  	foreach($x_value as $x)
  	{
  	echo "<br>";
  	echo "Value: $x";  
    }
    echo "<br>";
  }  

?>



</body>
</html>