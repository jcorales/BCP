<?php
# Clase Conection que se encarga de realizar la conexion con la base de datos usando PDO

/*Archivo de configuración para la conexión con la base de datos
mysql -u root -p
CREATE USER 'abel'@'localhost' IDENTIFIED BY '4b3lC0r4l3s';
grant all privileges on * . * to 'abel'@'localhost';
flush privileges;
create database abel;
use abel;
CREATE TABLE numbers (
num1 INT,
num2 INT,
result INT);*/

class Conection {

  private $host = "10.0.118.18";
  private $dbname = "abel";
  private $dbuser = "root";
  private $dbpass = "password";
  private $charset= "SET NAMES utf8";

     
  #Método que devuelve la conexión si no encuentra ningún error
  protected function connect() {
     
    # Realizamos un try and catch (prueba y captura del error).
    # Si la prueba es verdadera ejecuta el codigo que hay en su interior: realiza la conexion con la base de datos y lo devuelve como valor del metodo
    # Si da error mostrara en pantalla un error en pantalla con el numero de linea que se esta ejecutando mal en el codigo
    try {
    
      $link = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbname, $this->dbuser, $this->dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => $this->charset));
       
      $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $link;
       
    } catch (PDOException $e) {
                      
      error_log("Error en la conexion: " . $e->getMessage());
      return false; 
    }
     
  }
     
}
     
?>