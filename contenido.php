<?php session_start();

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

if (!$posts) {
	header('Location: error.php');
}

if (isset($_SESSION['usuario'])) {
	require 'views/contenido.view.php';
} else {
	header('Location: login.php');
}

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
}


 ?>
