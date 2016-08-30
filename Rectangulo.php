<?PHP
/**
* 
*/
//require "FiguraGeometrica.php";

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
    	return $this->prueba;
	}

}
?>



