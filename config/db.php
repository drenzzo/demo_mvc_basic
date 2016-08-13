<?php 

	/**
	* Conexion a bbdd usando mysqli
	*/
	class Connect 
	{
		
		public static function connection(){
			$cnx = new mysqli("localhost", "root", "", "demo_crud");
			return $cnx;
		}
	}
?>