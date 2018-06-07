<?php

/**
 *
 */
class Material
{
  private  $cod;
  private  $nombre;
  private  $descripcion;
  private  $unidad;
  private  $costo;
  private  $rubro;
  private  $almacen;
  private  $fecha_de_registro;


    public function getCod(){
          return $this->cod;
    }

     public function setCod($cod){
           $this->cod = $cod;
    }

    public function getNombre(){
          return $this->nombre;
    }

    public function setNombre($nombre){
           $this->nombre = $nombre;
    }

         public function getDescripcion(){
          return $this->descripcion;
    }

    public function setDescripcion($descripcion){
           $this->descripcion = $descripcion;
    }

    public function getUnidad(){
          return $this->unidad;
    }

    public function setUnidad($unidad){
           $this->unidad = $unidad;
    }

    public function getCosto(){
          return $this->costo;
    }

    public function setCosto($costo){
           $this->costo = $costo;
    }

    public function getRubro(){
          return $this->rubro;
    }

    public function setRubro($rubro){
           $this->rubro = $rubro;
    }

    public function getFechaDeRegistro(){
          return $this->fecha_de_registro;
    }

    public function setFechaDeRegistro($fecha_de_registro){
           $this->fecha_de_registro = $fecha_de_registro;
    }


    public function getAlmacen(){
        return $this->almacen;
    }

    public function setAlmacen($almacen){
         $this->almacen = $almacen;
    }




     }
