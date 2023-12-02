<?php
 session_start();

 if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])) 
 {
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    $salt = substr ($usuario, 0, 2);
    $clave_crypt = crypt ($clave, $salt);

    require_once("class/usuarios.php");

    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->validar_usuario($usuario,$clave_crypt);

    foreach ($usuario_validado as $array_resp){
        foreach ($array_resp as $value){
            $nfilas=$value;
        }
    }

    if ($nfilas > 0)
    {
        $usuario_valido = $usuario;
        $_SESSION["usuario_valido"] = $usuario_valido;
    }
 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<HTML LANG="es">
<HEAD>
<TITLE>Laboratorio 14 - Login al sitio de Noticias </TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<?php
//Sesión iniciada
 if (isset($_SESSION["usuario_valido"]))
 {
?>
<H1>Gestion de noticias</H1>
<HR>
<UL>
  <LI><A HREF="lab142.php">Listar todas las noticias</A>
  <LI><A HREF="lab143.php">Listar noticias por partes</A>
  <LI><A HREF="lab144.php">Buscar noticias</A>
</UL>
<HR>
<P>[ <A HREF='logout.php'>Desconectar</A> ]</P>
<?php
}
//intento de entrada Fallido
  else if(isset($usuario))
  {
    print("<BR><BR>\n");
    print("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
    print("<P ALING='CENTER'>[<A HREF='login.php'>Conectar</A> ]</P>\n");
  }
  else
  {
    print("<BR><BR>\n");
    print("<P CLASS='parrafocentrado'>Esta zona tiene el acceso restringido.<BR> " . 
           " Para entrar debe indentificarse</P>\n");
    print("<FORM CLASS='entrada' NAME='login' ACTION='login.php' METHOD='POST'>\n");

    print("<P><LABEL CLASS='etiqueta-entrada'>Usuario:</LABEL>\n");
    print(" <INPUT TYPE='TEXT' NAME='usuario' SIZE='15'></P>\n");
    print("<P><LABEL CLASS='etiqueta-entrada'>Clave:</LABEL>\n");
    print(" <INPUT TYPE='TEXT' NAME='clave' SIZE='15'></P>\n");
    print("<P><INPUT TYPE='SUBMIT' VALUE='entrar'></P>\n");
    print("</FORM>\n");
    print("<P CLASS='parrafocentrado'>Nota: si no dispone de indentificación o tiene problemas " . 
          "para entrar<BR>Pongase en contacto con el " . 
          "<A HREF='mailto:webmaster@localhost'>Administrador</A>del sitio</P>\n");
    
  }
?>
</BODY>
</HTML>