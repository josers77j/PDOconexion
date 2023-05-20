<?php
include("config.php");
$sesion = new config($host,$db,$usuario,$pwd);
$sesion->conectar();
?>