<?php
include_once "Conexion.php";
include_once "../modelo/material.php";

/**
 *
 */
class MaterialD extends Conexion
{

protected static  $cnx;




public static function getConexion()
{
  self::$cnx = Conexion::conectar();
}


private static function desconectar(){
  self::$cnx = null;

}

    /**
    * Metodo que sirve para registrar materiales
    *
    * @param      object         $material
    * @return     boolean
    */
    public static function registrar($material)
    {
         $query = "INSERT INTO materiales (nombre,descripcion,unidad,costo,rubro,almacen) VALUES (:nombre,:descripcion,:unidad,:costo,:$rubro,:$almacen)";
         self::getConexion();
         $resultado = self::$cnx->prepare($query);
         $resultado->bindParam(":nombre",$material->getNombre());
         $resultado->bindParam(":descripcion",$material->getDescripcion());
         $resultado->bindParam(":unidad",$material->getUnidad());
         $resultado->bindParam(":costo",$material->getCosto());
         $resultado->bindParam(":rubro",$material->getRubro());
         $resultado->bindParam(":almacen",$material->getAlmacen());
         if ($resultado->execute()) {
          return true;
         }
        return false;
    }

    /**
     * Metodo que sirve obtener un material
     *
     * @param      object         $material
     * @return     object
     */
    public static function getMaterial($usuario)
    {
        $query = "SELECT cod,nombre,decripcion,unidad,costo,rubro,almacen,fecha_registro FROM materiales WHERE cod = :cod";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":cod", $material->getCod());
        $resultado->execute();
        $filas = $resultado->fetch();
        $material = new Material();
        $material->setCod($filas["cod"]);
        $material->setNombre($filas["nombre"]);
        $material->setDescripcion($filas["descripcion"]);
        $material->setUnidad($filas["unidad"]);
        $material->setCosto($filas["costo"]);
        $material->setRubro($filas["rubro"]);
        $material->setAlmacen($filas["almacen"]);
        $material->setFecha_registro($filas["fecha_registro"]);
        return echo json_encode($material);
    }

}
