<?php
    $db = new SQLite3("../usuarios.db");
    $resultado = $db->query("SELECT * from datos;");

    $table = "
        <table class='table text-center'>
            <thead>
            <tr>
                <th>ID:</th>
                <th>Nombre persona:</th>
                <th>Dirección:</th>
                <th>Telefono:</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray() ) {
        //Forma 1 para mostrar datos
        $id_persona = $row['id_persona'];
        $nombre = $row['nombre'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];

        $table = "
            <tr>
                <td>$id_persona</td>
                <td>$nombre</td>
                <td>$direccion</td>
                <td>$telefono</td>
            </tr>
        ";

        print($table);

    }
 
    print("</table>"); 
?>