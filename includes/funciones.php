<?php

function obtener_servicios() {
    try {
        // Importar las credenciales
        require 'database.php';

        // Consulta sql
        $sql = "select * from Servicios;";

        // Ejecutar consulta
        $query = mysqli_query($db, $sql);

        // Acceder a resultados
        return $query;
        // Cerrar la conexión
        $result = mysqli_close($db);

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();

?>