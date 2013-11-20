<?php

class Usuario extends Modelo{
	public $nombre_tabla= "compraproducto";
	public $pk = "idcompra";

	public $atributos = array(
			'idcompra'=>array(),
			'idproducto'=>array(),
			'cantidad'=>array(),
			'precio'=>array(),
		);
	private $idcompra;
	private $idproducto;
	private $cantidad;
	private $precio;

	function compraproducto(){
		parent::Modelo();
	}

	public function set_idcompra(){
		$this->idcompra= $valor;
	}

	public function get_idcompra(){
		return $this->idcompra;
	}

	public function set_idproducto(){
		$this->idproducto= $valor;
	}

	public function get_idproducto(){
		return $this->idproducto;
	}

	public function set_cantidad(){
		$this->cantidad= $valor;
	}

	public function get_cantidad(){
		return $this->cantidad;
	}
}

?>