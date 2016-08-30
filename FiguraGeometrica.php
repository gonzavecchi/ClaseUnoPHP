<?PHP
/**
* 
*/
abstract class FiguraGeometrica
{
	private $_color;
	private $_perimetro;
	private $_superficie;
	public $prueba;
	


	function __construct()
	{
		 $this->prueba = "Hola Mundo!!!";
	}


	abstract protected function CalcularDatos();

	abstract public function Dibujar();


	function GetColor()
	{
		return "";
	}

	function SetColor($color)
	{

	}


	function ToString() 
	{
    	return $this->prueba;
	}


}

class Rectangulo extends FiguraGeometrica
{
	private $_ladoUno;
	private $_ladoDos;
	public $prueba;
	


	function __construct()
	{parent::__construct($l1, $l2);
		 $this->_ladoUno = $l1;
		 $this->_ladoDos = $l2;		 
		 $this->CalcularDatos();
	}


	protected function CalcularDatos()
	{
		parent::_perimetro == ($this->_ladoUno * 2) + ($this->_ladoDos * 2);
		parent::_superficie == ($this->_ladoUno * $this->_ladoDos);
	}


	public function Dibujar()
	{

	}

	function GetColor()
	{
		return "";
	}

	function SetColor($color)
	{

	}


	function ToString() 
	{
    	return $this->_ladoUno;
	}

}

$Ejemplo2 = new Rectangulo(2,2);

echo "<br><br>Prueba<br>";
echo $Ejemplo2->ToString();
echo "<br><br>Prueba<br>";


echo "----------------------<br>";


?>



