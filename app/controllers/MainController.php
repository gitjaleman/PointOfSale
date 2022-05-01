<?php
	class MainController{
		public function index()             				{ Response::render("index");}
		public function caja()             					{ Response::render("caja");}
		public function panel()             				{ Response::render("panel");}
		public function clientes()             			{ Response::render("clientes");}
		public function ventas()             				{ Response::render("ventas");}
		public function pedidos()             			{ Response::render("pedidos");}
		public function inventario()             		{ Response::render("inventario");}
		public function mensajes()             			{ Response::render("mensajes");}
	}
?>
