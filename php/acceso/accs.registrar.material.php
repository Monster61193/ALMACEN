<?php
require_once('../controlador/Material.controlador.php');
header('Content-type: application/json');




$resultado = array();

if ((isset($_POST["txtNombre"]) && isset($_POST["txtdescripcion"])) && (isset($_POST["txtunidad"]) && isset($_POST["txtCosto"])) && (isset($_POST["txtRubro"]) && isset($_POST["txtAlmacen"])))
{
    $resultado = array("estado" => "true");

    if (MaterialControlador::registrar($nombre, $descripcion, $unidad, $costo, $rubro, $almacen))
        {
          return print(json_encode($resultado));

         }else{
                $resultado = array("estado" => "false");
                return print(json_encode($resultado));
              }

    }

    $resultado = array("estado" => "false");
    return print(json_encode($resultado));
