<?php
	class conn extends mysqli{
		function __construct(){
			parent::__construct("localhost","u931227564_pucunoa","Password.2022+","u931227564_pucunoa");
			if (mysqli_connect_error()) {
				print("error de conexion");
			}
		}
	}
?>