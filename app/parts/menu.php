<?php


//$menu_configuracion = ["dir" => "configuracion", "text" => "CONFIGURACIÓN", "icon" => "bx-cog", "sub" => false];
/*
$menu_configuracion = ["dir" => false, "text" => "CONFIGURACIÓN", "icon" => "bx-cog", "sub" => [
	["subdir" => "config_usuarios", "subtext" => "USUARIOS"],
	["subdir" => "config_vehiculos", "subtext" => "VEHÍCULOS"],
	["subdir" => "config_entidades", "subtext" => "ENTIDADES"],
	["subdir" => "config_empleados", "subtext" => "EMPLEADOS"],
	["subdir" => "config_ciudades", "subtext" => "CIUDADES"]
]];
$menu_registro = ["dir" => false, "text" => "REGISTRO", "icon" => "bx-pencil", "sub" => [
	["subdir" => "clientes", "subtext" => "CLIENTES"],
	["subdir" => "propietarios", "subtext" => "PROPIETARIOS"],
	["subdir" => "aliados", "subtext" => "ALIADOS"],
	["subdir" => "vehiculos", "subtext" => "VEHÍCULOS"],
	["subdir" => "empleados", "subtext" => "EMPLEADOS"]
]];
$menu_operaciones = ["dir" => false, "text" => "OPERACIONES", "icon" => "bx-chip", "sub" => [
	["subdir" => "plantillas", "subtext" => "PLANTILLAS"],
	["subdir" => "combustible", "subtext" => "COMBUSTIBLE"]
]];
$menu_web = ["dir" => false, "text" => "WEB", "icon" => "bx-world", "sub" => [
	["subdir" => "informacion", "subtext" => "INFORMACIÓN"],
	["subdir" => "galeria", "subtext" => "GALERIA"],
	["subdir" => "noticias", "subtext" => "NOTICIAS"]
]];





$menu_session_user	= array($menu_configuracion);
$menu_session_admin	= array($menu_configuracion,$menu_registro, $menu_operaciones,$menu_web);
$menu_session_type = $_SESSION['session_type'];
switch ($menu_session_type) {
	case 0:
		$menu_session_status = $menu_session_admin;
		break;

	case 1:
		$menu_session_status = $menu_session_user;
		break;
}
*/


?>
<div class="menu_items">
 	<div class="item">
		<a href="">
			<i class="fa fa-desktop" aria-hidden="true"></i>
		</a>
	 </div>
	 <br>
	 <div class="item">
		<a href="">
			<i class="fa fa-th-large" aria-hidden="true"></i>
		</a>
	 </div>
	 <div class="item">
		<a href="">
			<i class="fa fa-users" aria-hidden="true"></i>
		</a>
	 </div>
	 <div class="item">
		<a href="">
			<i class="fa fa-money" aria-hidden="true"></i>
		</a>
	 </div>
	 <div class="item">
		<a href="">
			<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
		</a>
	 </div>
	 <div class="item">
		<a href="">
			<i class="fa fa-archive" aria-hidden="true"></i>
		</a>
	 </div>
	 <div class="item">
		<a href="">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</a>
	 </div>
		 
</div>
