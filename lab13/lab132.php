<?php
  if (array_key_exists('enviar', $_POST))
  {
    $expire=time()+60*5;
    setcookie("user", $_REQUEST['visitante'], $expire);
    header("Refresh:0");
  }
  else
  {
    //caduca en un año
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido a nuestro sitio web';
    
  }
?>
<HTML XMLNS="http://w3.org/1999/xhtml" xml:lang="es" LANG="ES">
<HEAD>
    <TITLE>Laboratorio 13</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1>Creación de Cookies</H1>
    <H2>La cookie "User" tendrá solo 5 minutos de duración</H2>
<?php 
if (isset($_COOKIE["user"]))
{
    print("<BR/>Hola <B>" . $_COOKIE["user"] . "</B> gracias por visitar nuestro sitio web. <BR/>");
}else {
?>
<FORM NAME="formcookie" METHOD="post" ACTION="lab132.php">
<BR/>Hola, primera vez que te vemos por nuestro sitio web ¿como te llamas?
<INPUT TYPE="text" NAME="visitante">
<INPUT NAME="enviar" VALUE="Gracias por identificarte" TYPE="submit" /><BR/> 
<?php
}
 ?>
 <BR/><A HREF='lab133.php'>Continuar...</A>
</BODY>
</HTML>
