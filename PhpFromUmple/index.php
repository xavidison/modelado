<?php
// Include the Calificacion class definition
require_once('Calificacion.php');
require_once('Categoria.php');
require_once('Meme.php');
require_once('Usuario.php');

$calificacion = new Calificacion();
$categoria = new categoria();
$meme = new meme();
$usuario = new usuario();

$calificacion->imprimir_nombre_clase();
$categoria->imprimir_nombre_clase();
$meme->imprimir_nombre_clase();
$usuario->imprimir_nombre_clase();

?>