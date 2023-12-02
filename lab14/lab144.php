<?php 

 session_start();

?>
<HTML LANG="ES">
<HEAD>
<TITLE>Laboratorio 9.1</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<H1>Consulta Noticias</H1>
<FORM NAME="FormFiltro" METHOD="post" ACTION="lab92.php">
<BR/>
Filtrar por:    <SELECT NAME="campos">
<OPTION value="texto"   SELECTED>Descripcion
<OPTION value="Titulo"> Titulo
<OPTION value="categoria"> Categoria 
</SELECT>
Con el valor
<input TYPE="text"   NAME="valor">
<INPUT NAME="ConsultarFiltro"   VALUE="Filtrar datos" TYPE="submit"/>
<INPUT NAME="ConsultarTodos "   VALUE="Ver todos" TYPE="submit"/>
</FORMT>

<?php
if (isset($_SESSION["usuario_valido"]))
{

require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();

if(array_key_exists('ConsultarTodos', $_POST)) {

    $obj_noticia = new noticia();
    $noticias_new = $obj_noticia->consultar_noticias();
}

if(array_key_exists('ConsultarFiltro', $_POST)) {
                                                                                    
    $obj_noticia = new noticia();
    $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'], $_REQUEST['valor']);
}


$nfilas=count($noticias);

if ($nfilas>0)
{
print ("<TABLE>\n");
print ("<TR>\n");
print ("<TH>Titulo</TH>\n");
print ("<TH>Texto</TH>\n");
print ("<TH>Categoria</TH>\n");
print ("<TH>Fecha</TH>\n");
print ("<TH>Imagen</TH>\n");
print ("</TR\n");

foreach ( $noticias as $resultado) {
    print ("<TR>\n");
    print ("<TD>". $resultado['titulo'] . "</TD>\n");
    print ("<TD>". $resultado['texto'] . "</TD>\n");
    print ("<TD>". $resultado['categoria'] . "</TD>\n");
    print ("<TD>". date("j/n/Y",strtotime($resultado['fecha'])) . "</TD>\n");
   

if($resultado['imagen']!= ""){

    print ("<TD><A TARGET= '_blank' HREF='img/". $resultado['imagen'].
    "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");

}else {
    print("<TD>&nbsp;</TD>\n");
}
print("</TR>\n");
}
print("</TABLE>\n");
}

else {
    print ("No hay noticias disponibles");
}
print("<P> [ <A  HREF='login.php'>Menu Principal</A> ] </P>");

}
else
{
    print ("<BR><BR>\n");
    print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");
    print("<P ALING='CENTER'>[<A HREF='login.php' TARGET='_top'>Conectar</A> ]</P>\n");
}

?>
</BODY>
</HTML>