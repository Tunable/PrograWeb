<?php

class Usuario extends Modelo{
	public $nombre_tabla= "cliente";
	public $pk = "cliente";

	public $atributos = array(
			'cliente'=>array(),
			'nombre'=>array(),
			'telefono'=>array(),
			'calle'=>array(),
			'colonia'=>array(),
			'numero'=>array(),
			'codigopostal'=>array(),
		);
	private $cliente;
	private $nombre;
	private $telefono;
	private $calle;
	private $colonia;
	private $numero;
	private $codigopostal;

	function cliente(){
		parent::Modelo();
	}

	public function set_cliente(){
		$this->cliente= $valor;
	}

	public function get_cliente(){
		return $this->cliente;
	}

	public function set_nombre(){
		$this->nombre= $valor;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function set_telefono(){
		$this->telefono= $valor;
	}

	public function get_telefono(){
		return $this->telefono;
	}

	public function set_calle(){
		$this->calle= $valor;
	}

	public function get_calle(){
		return $this->calle;
	}

	public function set_colonia(){
		$this->colonia= $valor;
	}

	public function get_colonia(){
		return $this->colonia;
	}

	public function set_numero(){
		$this->numero= $valor;
	}

	public function get_numero(){
		return $this->numero;
	}

	public function set_codigopostal(){
		$this->codigopostal= $valor;
	}

	public function get_codigopostal(){
		return $this->codigopostal;
	}
}

?>