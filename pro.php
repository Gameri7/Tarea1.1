
<?php 

print("Esto es lenguaje PHP");

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



</body>

</html>
<?php

       print_r($_REQUEST);

       print "<p>Su nombre es $_REQUEST[Usuario]</p>\n";

       print("<br>La clave es". $_REQUEST['Clave']);

       print("<h1>La clave es". $_REQUEST['Edad']);

       print("<h1>");

?>
<?php

       print_r($_REQUEST);

       print "<p>Su nombre es $_REQUEST[Usuario]</p>\n";

       print("<br>La clave ingresada es". $_REQUEST['Clave']);

       print("<h1>La Edad es ". $_REQUEST['Edad']);

       print("</h1>");

       print("<br><br>Fin del ejercio inicial");

       // $mivariable = $_REQUEST['HTTP_USER_AGENT'];

       print("<br><h3>Se imprime los Headers: </h3><br>");

       var_dump($_SERVER);

       print("<br><h3>Se usa la función getallheaders: </h3><br>");

?>

<?php

       foreach (getallheaders() as $name => $value) {

           echo "$name: $value <br>";

       }

?> 

<h3>Demostrando Header Http con Lenguaje Php</h3>

<?php

       $header = apache_request_headers();

       foreach ($header as $headers => $value) {

          echo "$headers: $value <br/>\n";

          //echo"<marquee>Este texto se mueve de derecha a izquierda</marquee>";

       }

?>

Mediante preg_match

<?php

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

  
  print("Esto es lenguaje PHP");
  
  ?>
  
  <!DOCTYPE html>
  
  <html>
  
  <head>
  
  <meta charset="utf-8">
  
  <title>Mi pagina en PHP</title>
  
  </head>
  
  <?php 


// Vamos a mostrar un PDF
header('Content-Type: application/txt');

// Se llamará downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.txt"');

// La fuente de PDF se encuentra en tokengub.txt
readfile('tokengub.txt');
?>
