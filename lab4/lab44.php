<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $numeros_pares = array();

        for ($i = 0; $i < $cantidad; $i++) {
            $numero = null;

            while (true) {
                $numero = (int) readline("Ingrese el número $i (debe ser par): ");
                
                if ($numero % 2 == 0) {
                    break; // El número es par, salir del bucle while
                } else {
                    echo "El número ingresado es impar. Introduzca un número par.\n";
                }
            }

            $numeros_pares[] = $numero;
        }

        echo "<h2>Arreglo de Números Pares:</h2>";
        echo "<pre>";
        print_r($numeros_pares);
        echo "</pre>";
    }
    ?>