<?php

class Conexion{

	function Conexion(){

		$this->db = ADONewConnnection('mysql');
		$this->db->debug=true;
							//host, bd, usuario,password
		$this->db->Connect('localhost','clase','root'/*,'root'*/);
		

	}

}

?>