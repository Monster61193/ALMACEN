<?php
/**
 *
 */
class Conexion
{

  public static function get_connection(){
      try {

            $cn= new PDO("mysql:host=localhost;dbname=mydb2","root","");
            return $cn;

          } catch (PDOException $ex) {

              die($ex->getMessage());

              }
  }




}
