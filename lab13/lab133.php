<HTML XMLNS="http://w3.org/1999/xhtml" xml:lang="es" LANG="ES">
<HEAD>
    <TITLE>Laboratorio 13</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1>Recuperar valor de una Cookie</H1>
<?php 
if
 (isset($_COOKIE["user"]))
 echo "<H2>Bienvenido ". $_COOKIE["user"]."!</H2><BR/>";
 else
 echo
 "<H2>Bienvenido invitado!</H2><BR/>";
?>
    <BR/><A HREF='lab131.php'>...Regresar</A>&nbsp;
    <BR/><A HREF='lab134.php'>Continuar...</A>
    </BODY>
</HTML>    