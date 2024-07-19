<?php
require_once '../MODELO/modeloLibro.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregar":

        agregarLibros();

        break;
    case "eliminar":

        eliminarLibros();

        break;
    case "obtener":

        obtenerLibros();

        break;

    case "modificar":

        modificarLibros();

        break;
}


function obtenerLibros()
{   
    $resultado = (new modeloLibro())->obtenerLibroModelo();
    echo json_encode($resultado);
}

function agregarLibros()
{
    $nombre= $_POST['nombre'];
    $fecha= $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new modeloLibro())->agregarLibroModelo($nombre,$fecha,$precio);
    echo json_encode($resultado);
}

function eliminarLibros()
{
    $id = $_POST['id'];
    $resultado = (new modeloLibro())->eliminarLibroModelo($id);
    echo json_encode($resultado);
}

function modificarLibros()
{
    $id= $_POST['id'];
    $nombre= $_POST['nombre'];
    $fecha= $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new modeloLibro())->modificarLibroModelo($id,$nombre,$fecha,$precio);
    echo json_encode($resultado);
}
