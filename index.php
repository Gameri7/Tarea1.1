<?php

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';


$useragent = $_SERVER['HTTP_USER_AGENT'];

$otros = '';


if (preg_match("/Edg/i", $useragent)){

  echo "Estás navegando desde <b>EDGE</b>";

}elseif (preg_match("/KHTML like Gecko/i", $useragent) || preg_match("/Safari/i", $useragent)){

  echo "Estás navegando desde <b>CHROME</b>";

}else if (preg_match("/20100101/i", $useragent)) {

  echo "Estás navegando desde <b>FIREFOX</b>";

}elseif (preg_match("/OPR/i", $useragent)) {

  echo "Estás navegando desde <b>OPERA</b>";

}elseif (preg_match("/Mobile/i", $useragent)) {

  echo "Estás navegando desde <b>SAFAR</b>I";

}else {

  echo "Estás navegando desde <b>OTRO NAVEGADOR</b>";

}

?>
<hr>
<h3>Tabla Completa de Headers</h3>
<?php
    echo '<table border="1">';
    foreach($_SERVER as $k=>$v) {
      echo '<tr><td>'.$k.'</td><td>'.$v.'</td></tr>';
    }   
    echo '</table>';

?>
<?php 

print("Hola mundo - Esto es lenguaje PHP");

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Mi pagina en PHP</title>

</head>

<body>

<form action="pro.php" method="get">

      <input type="text" name="Usuario" placeholder="Ingresa User">

      <input type="text" name="Clave" placeholder="Ingresar Clave">      

      <input type="text" name="Edad" placeholder="Ingresar Edad">

      <input type="submit" name="Enviar" value="Guardar">

</form>

Maestria en software Loja.

</body>

</html>

<?php 

