<?php 
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);//me evita que se muestre en patalla los avisos de warning
	class clsClase
	{	
		//private static $contador=null;
		public $nombre="Claudio";//esta es una propiedad.
		protected $dni="46463112";//solo tiene ambito a nivel de la misma clase
		private $cuenta_bank="red4557";
		public function mostrar_datos($mensaje){
			echo "<br/>hola: ".$this->nombre;//accedo a la propiedad del objeto y leugo lo imprimo
			echo "<br/>el dni es: ".$this->dni;//accedo a la propedad pretected. 
			echo "<br/>el mensaje es: ".$mensaje;
		}
		function __construct($nombre){//metodo constructor
                        static $private=1;
			echo "<br/>start constructor, instancia nro : ".$private;//al instante de q se cree el objeto se ejecutara el metodo constructor
                        $private+=1;
		}

	}
	$a=new clsClase('soy a');//creando una instancia
	$b=new clsClase('soy b');//creando otra instancia
        echo '<br/>ejecuto a->mostrar_datos("a esta listo")';
	$a->mostrar_datos('a esta listo');//ejecutando el metodo de la clase
	echo "<br/>\$a->nombre".$a->nombre;
	$a->nombre='Gustavo';
	echo "<br/>\$a->nombre".$a->nombre;
	//echo "<br/>\$a->dni".$a->dni;//trato de acceder una propiedad protected
        echo '$b->mostrar_datos("b esta listo")';
        echo '<br/>ejecuto b->mostrar_datos("b esta listo")';
	$b->mostrar_datos('b esta listo');



 ?>