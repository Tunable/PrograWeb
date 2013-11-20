<?php

class Usuario extends Modelo{
	public $nombre_tabla= "producto";
	public $pk = "idproducto";

	public $atributos = array(
			'idproducto'=>array(),
			'nombre'=>array(),
			'precio'=>array(),
			'idprovedor'=>array(),
			'cantidad'=>array(),
		);
	private $idproducto;
	private $nombre;
	private $precio;
	private $idprovedor;
	private $cantidad;

	function producto(){
		parent::Modelo();
	}

	public function set_idproducto(){
		$this->idproducto= $valor;
	}

	public function get_idproducto(){
		return $this->idproducto;
	}

	public function set_nombre(){
		$this->nombre= $valor;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function set_precio(){
		$this->precio= $valor;
	}

	public function get_precio(){
		return $this->precio;
	}

	public function set_idprovedor(){
		$this->idprovedor= $valor;
	}

	public function get_idprovedor(){
		return $this->idprovedor;
	}

	public function set_cantidad(){
		$this->cantidad= $valor;
	}

	public function get_cantidad(){
		return $this->cantidad;
	}
}

?>