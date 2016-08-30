<html>
<head>
	<title>Vecchi</title>
</head>
<body>
<H1>Hola Mundo</H1>
<?PHP

require 'FiguraGeometrica.php';
require 'Rectangulo.php';

$Ejemplo = new FiguraGeometrica();

$Ejemplo2 = new Rectangulo();

echo "<br><br>Prueba<br>";
echo $Ejemplo->ToString();
echo "<br><br>Prueba<br>";


echo "----------------------<br>";


?>

</body>
</html>