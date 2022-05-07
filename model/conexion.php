<?php

	class conexion
	{

		public function conectar()
		{

			$server="localhost";
			$conexion=array("Database"=>"Web_Transfer",
							"UID"=>"paraclase",
							"PWD"=>"12345",
							"CharacterSet"=>"UTF-8");
			$con=sqlsrv_connect($server,$conexion);

			if ($con) 
			{

				return $con;

			}
			else
			{

				echo "Fallo en la conexion...";
				die( print_r( sqlsrv_errors(), true));

			}
			

		}

		public function desconectar()
		{

			$con=null;
			return $con;

		}

	}


?>