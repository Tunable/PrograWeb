<?php

class Usuario extends Modelo{
	public $nombre_tabla= "empleado";
	public $pk = "idempleado";

	public $atributos = array(
			'idempleado'=>array(),
			'nombre'=>array(),
			'apellido'=>array(),
			'telefono'=>array(),
			'idempresa'=>array(),
			
		);
	private $idempleado;
	private $nombre;
	private $apellido;
	private $telefono;
	private $idempresa;
	

	function empleado(){
		parent::Modelo();
	}

	public function set_idempleado(){
		$this->idempleado= $valor;
	}

	public function get_idempleado(){
		return $this->idempleado;
	}

	public function set_nombre(){
		$this->nombre= $valor;
	}

	public function get_nombre(){
		return $this->nombre;
	}

	public function set_apellido(){
		$this->apellido= $valor;
	}

	public function get_apellido(){
		return $this->apellido;
	}

	public function set_telefono(){
		$this->telefono= $valor;
	}

	public function get_telefono(){
		return $this->telefono;
	}

	public function set_idempresa(){
		$this->idempresa= $valor;
	}

	public function get_idempresa(){
		return $this->idempresa;
	}
}

?>