<?php

class Usuario extends Modelo{
	public $nombre_tabla= "venta";
	public $pk = "idventa";

	public $atributos = array(
			'idventa'=>array(),
			'total'=>array(),
			'fecha'=>array(),
			'cliente'=>array(),
			'idempleado'=>array(),
		);
	private $idventa;
	private $total;
	private $fecha;
	private $cliente;
	private $idempleado;

	function venta(){
		parent::Modelo();
	}

	public function set_idventa(){
		$this->idventa= $valor;
	}

	public function get_idventa(){
		return $this->idventa;
	}

	public function set_total(){
		$this->total= $valor;
	}

	public function get_total(){
		return $this->total;
	}

	public function set_fecha(){
		$this->fecha= $valor;
	}

	public function get_fecha(){
		return $this->fecha;
	}

	public function set_cliente(){
		$this->cliente= $valor;
	}

	public function get_cliente(){
		return $this->cliente;
	}

	public function set_idempleado(){
		$this->idempleado= $valor;
	}

	public function get_idempleado(){
		return $this->idempleado;
	}
}

?>