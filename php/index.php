<?php
require_once("./motores/interno/defs.php");
session_start();
$hayUsuario = (isset($_SESSION['Usuario']) && $_SESSION['Usuario']['rol'] != 't');
if (!$hayUsuario) {
	$_SESSION['Usuario'] = array("rol" => "t", "publica" => "invalida");
	?>

<?php
} else {
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: ./' . $_SESSION['Usuario']['pag_inicial']);

}
?>

<!--Archivo PHP "lo desconocido",  que valida el usuario para inicio de sesión-->