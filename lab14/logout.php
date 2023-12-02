<?php 
  session_start();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Desconectar</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<?php 
  if (isset($_SESSION["usuario_valido"]))
  {
    session_destroy();
    print("<BR><BR><P ALIGN='CENTER'>Conexión finalizada</P>\n");
    print("<P ALING='CENTER'>[<A HREF='login.php'>Conectar</A> ]</P>\n");
  }
  else
  {
   print("<BR><BR>\n");
   print("<P ALIGN='CENTER'>No existe una conexión activa</P>\n");
   print("<P ALING='CENTER'>[<A HREF='login.php'>Conectar</A> ]</P>\n");

  }

?>
</BODY>
</HTML>  