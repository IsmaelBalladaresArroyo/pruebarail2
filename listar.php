<?php
    include("conexion.php");

    $pru = conexion();

    $sql = "SELECT idpersona, documento, nombre, apellido, direccion, celular FROM persona";
    $resultado = pg_query($pru, $sql);

    pg_close($pru);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pagina Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
