<?php 

	/**
	* Conexion a bbdd usando mysqli
	*/
	class Connect 
	{
		
		public static function connection(){
			$cnx = new mysqli("localhost", "root", "", "demo_crud");
			$cnx->query("SET NAMES 'utf8'");
			return $cnx;
		}
	}
?>