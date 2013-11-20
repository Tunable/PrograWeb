<?php

class Usuario extends Modelo{
	public $nombre_tabla= "servicio";
	public $pk = "servicio";

	public $atributos = array(
			'servicio'=>array(),
			'cliente'=>array(),
			'idempresa'=>array(),
			'idproducto'=>array(),
			'idcompra'=>array(),
		);
	private $servicio;
	private $cliente;
	private $idempresa;
	private $idproducto;
	private $idcompra;

	function servicio(){
		parent::Modelo();
	}

	public function set_servicio(){
		$this->servicio= $valor;
	}

	public function get_servicio(){
		return $this->servicio;
	}

	public function set_cliente(){
		$this->cliente= $valor;
	}

	public function get_cliente(){
		return $this->cliente;
	}

	public function set_idempresa(){
		$this->idempresa= $valor;
	}

	public function get_idempresa(){
		return $this->idempresa;
	}

	public function set_idproducto(){
		$this->idproducto= $valor;
	}

	public function get_idproducto(){
		return $this->idproducto;
	}

	public function set_idcompra(){
		$this->idcompra= $valor;
	}

	public function get_idcompra(){
		return $this->idcompra;
	}
}

?>