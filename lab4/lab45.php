<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $orden = $_POST["orden"];
        
        if ($orden % 2 == 0) {
            echo "<h2>Matriz Identidad de orden $orden:</h2>";
            echo "<table border='1'>";
            
            // Crear la matriz identidad
            $matriz = array();
            for ($i = 0; $i < $orden; $i++) {
                $fila = array();
                for ($j = 0; $j < $orden; $j++) {
                    if ($i == $j) {
                        $fila[] = 1;
                    } else {
                        $fila[] = 0;
                    }
                }
                $matriz[] = $fila;
            }
            
            // Mostrar la matriz en una tabla
            foreach ($matriz as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "<p>El valor de N debe ser un número par.</p>";
        }
    }
    ?>