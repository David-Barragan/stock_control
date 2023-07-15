<?php 

require_once('../models/Conexion.php');
require_once('../models/Users.php');
require_once('../models/Sesion.php');


$email = $_POST['email'];
$password = $_POST['password'];
$objetoSession = new Sesion();
$sesiont = $objetoSession -> startSesion($email, $password);