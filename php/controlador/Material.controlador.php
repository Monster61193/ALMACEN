<?php
include '../datos/MaterialD.php';
/**
 *
 */
class MaterialControlador
{

    public function getMaterial($cod)
    {
        $obj_material = new Material();
        $obj_material->setCod($cod);
        return MaterialD::getMaterial($obj_material);
    }

    public function registrar($nombre, $descripcion, $unidad, $costo, $rubro, $almacen)
    {
        $obj_material = new Material();
        $obj_material->setNombre($nombre);
        $obj_material->setDescripcion($descripcion);
        $obj_material->setUnidad($unidad);
        $obj_material->setCosto($costo);
        $obj_material->setRubro($rubro);
        $obj_material->setAlmacen($almacen);
        return MaterialD::registrar($obj_material);
    }

    // TODO: Metodo para listar materiales
    // TODO: Metodo para ver existencias

}
