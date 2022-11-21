<?php

require_once 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['password'];

$sql = "SELECT * ";
$sql .= "FROM credenciales ";
$sql .= "WHERE usuario = '" . $usuario ."'";

$resultados = $conexion->query($sql);

$fila = mysqli_fetch_assoc($resultados);

$claveHash = $fila['password'];

if(password_verify($clave, $claveHash)){
    $_SESSION['logueado'] = true;
    header("Location: logged-area.php");
}else{
    $_SESSION['logueado'] = false;
    header("Location: index.php");
}