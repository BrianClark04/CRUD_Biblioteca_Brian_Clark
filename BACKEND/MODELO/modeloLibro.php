<?php

require_once "../CONEXION/conexion.php";

class modeloLibro
{

    function obtenerLibroModelo()
    {
        $conexion = new conn;
        $conn = $conexion->connection();
        $sql = "SELECT * FROM libro;";
        $respuesta = $conn->query($sql);
        $libros = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $libros;
    }

    function agregarLibroModelo($nombre, $fecha, $precio)
    {

        $conexion = new conn;
        $conn = $conexion->connection();
        $sql = "INSERT INTO libro VALUES(null,'$nombre','$fecha','$precio');";
        $respuesta = $conn->query($sql);
        if ($respuesta) {
            return new respuesta(true, "libro agregado", $respuesta);
        } else {
            return new respuesta(false, "el libro no se pudo agregar", $respuesta);
        }
    }


    function eliminarLibroModelo($id_libro)
    {
        $conexion = new conn;
        $conn = $conexion->connection();
        $sql = "DELETE FROM libro WHERE(id='$id_libro')";
        $respuesta = $conn->query($sql);
        return $respuesta;
    }

    function modificarLibroModelo($id, $nombre, $fecha, $precio)
    {

        $conexion = new conn;
        $conn = $conexion->connection();
        $sql = "UPDATE libro SET nombre = '$nombre', fecha = '$fecha', precio = '$precio' WHERE id='$id'; ";
        $respuesta = $conn->query($sql);
        return $respuesta;

    }

}