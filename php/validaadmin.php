<?php
if(!isset($_SESSION['vsCodigo'])){
	header('location:login.HTML');
}
if($_SESSION['vsTipo']!='admin'){
	header('location:login.HTML');
}
?>