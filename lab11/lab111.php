<HTML LANG="ES">
<HEAD>
    <TITLE>Laboratorio 9.1</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1>Consulta Noticias</H1>
    <?php
    require_once("class/noticias.php");

    $obj_noticia = new noticia();

    // Obtener el número de página actual
    $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
    $noticias_por_pagina = 5; // Número de noticias por página

    // Calcular el inicio de la selección basado en la página actual
    $inicio = ($pagina_actual - 1) * $noticias_por_pagina;

    // Consultar las noticias para la página actual
    $noticias = $obj_noticia->consultar_noticias_paginadas($pagina_actual, $noticias_por_pagina);

    // Consultar las noticias para contar el total de noticias
$total_noticias = $obj_noticia->contarNoticias();

// Calcular el total de páginas
$total_paginas = ceil($total_noticias / $noticias_por_pagina);

    $nfilas = count($noticias);

    if ($nfilas > 0) {
        print ("<TABLE>\n");
        print ("<TR>\n");
        print ("<TH>Titulo</TH>\n");
        print ("<TH>Texto</TH>\n");
        print ("<TH>Categoria</TH>\n");
        print ("<TH>Fecha</TH>\n");
        print ("<TH>Imagen</TH>\n");
        print ("</TR\n");

        foreach ($noticias as $resultado) {
            print ("<TR>\n");
            print ("<TD>" . $resultado['titulo'] . "</TD>\n");
            print ("<TD>" . $resultado['texto'] . "</TD>\n");
            print ("<TD>" . $resultado['categoria'] . "</TD>\n");
            print ("<TD>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</TD>\n");

            if ($resultado['imagen'] != "") {
                print ("<TD><A TARGET= '_blank' HREF='img/" . $resultado['imagen'] .
                    "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
            } else {
                print ("<TD>&nbsp;</TD>\n");
            }
            print("</TR>\n");
        }
        print("</TABLE>\n");


        if ($total_noticias > 0) {
        // Obtener el número de noticias mostradas
$noticias_mostradas_desde = ($pagina_actual - 1) * $noticias_por_pagina + 1;
$noticias_mostradas_hasta = min($noticias_mostradas_desde + $noticias_por_pagina - 1, $total_noticias);

// Mostrar el mensaje con la cantidad de noticias mostradas y el total
echo "Mostrando noticias de $noticias_mostradas_desde a $noticias_mostradas_hasta de un total de $total_noticias";

// Mostrar la paginación
echo "<div class='pagination'>";
if ($pagina_actual > 1) {
    echo "<a href='?pagina=" . ($pagina_actual - 1) . "'>\nAnterior</a>\n";
}

for ($i = 1; $i <= $total_paginas; $i++) {
    echo "<a href='?pagina=$i'>$i</a>";
}

if ($pagina_actual < $total_paginas) {
    echo "<a href='?pagina=" . ($pagina_actual + 1) . "'>\nSiguiente</a>\n";
}
echo "</div>"; 
}
}
    ?>
</BODY>
</HTML>
