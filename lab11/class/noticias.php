<?php

require_once('modelo.php');

class noticia extends modeloCredencialesBD{

    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct()
    {
 
        parent::__construct();
    }

    public function consultar_noticias(){
 
        $instruccion = "CALL sp_listar_noticias()";

        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado){
 
            echo "Fallo al consultar las noticias";

        }else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function consultar_noticias_filtro($campo,$valor) {
 
        $instruccion = "CALL sp_listar_noticias_filtro('".$campo."','".$valor."')";

        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_ALL(MYSQLI_ASSOC);

        if($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }

    }

    public function consultar_noticias_paginadas($pagina_actual, $noticias_por_pagina){
        try {
            // Calcular el desplazamiento (offset) para la página actual
            $offset = ($pagina_actual - 1) * $noticias_por_pagina;
    
            // Preparar la llamada al procedimiento almacenado
            $query = "CALL sp_listar_noticias_paginadas(?, ?)";
            $statement = $this->_db->prepare($query);
            
            $statement->bind_param('ii', $offset, $noticias_por_pagina);
            
            $statement->execute();
            $resultados = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
            
            $statement->close();
            return $resultados;
    
            // Cerrar la conexión (liberar recursos)
            $statement->closeCursor();
    
            // Devolver los resultados
            return $resultados;
        } catch (PDOException $e) {
            echo "Error al consultar las noticias: " . $e->getMessage();
            return false;
        }
    }

    public function contarNoticias() {
        try {
            $query = "SELECT COUNT(*) as total FROM noticias";
            $statement = $this->_db->query($query);
            
            if ($statement) {
                $row = $statement->fetch_assoc();
                $total_noticias = $row['total'];
                $statement->close();
                return $total_noticias;
            } else {
                return 0; // Manejar el error de alguna otra forma
            }
        } catch (Exception $e) {
            echo "Error al contar las noticias: " . $e->getMessage();
            return 0; // Manejar el error de alguna otra forma
        }
    }

}

?>
