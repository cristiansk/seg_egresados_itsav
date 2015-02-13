<?php 
@session_start();
if(!$_SESSION['user']){
	echo "<script>alert('No ha iniciado sesion')</script>";
	header("Location: index.html");
}
?>