<?php

class Usuario extends Modelo{
	public $nombre_tabla= "empresa";
	public $pk = "idempresa";

	public $atributos = array(
			'idempresa'=>array(),
			'nombre'=>array(),
			'telefono'=>array(),
			'calle'=>array(),
			'colonia'=>array(),
			'numero'=>array(),
		);
	private $idempresa;
	private $nombre;
	private $telefono;
	private $calle;
	private $colonia;
	private $numero;

	function empresa(){
		parent::Modelo();
	}

	public function set_idempresa(){
		$this->idempresa= $valor;
	}

	public function get_idempresa(){
		return $this->idempresa;
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
}

?>