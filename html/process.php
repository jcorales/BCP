<?php
//Clase para el registro de usuarios
include("models/DBConnect.php");

class Registro extends Conection {

  public $error = "";
  public $result;

	/**
	* Suma y guarda los números en BD
	* @param array $data Datos a registrar
	* @return bool
	*/
	public function regNumbers($data){
		//Realizar la conexión a la base de datos
		$mbd = $this->connect();
		if(!($mbd)){
			$this->error = "Hubo un error de conexión con la base de datos";
			return false;
		}
		
    //Ejecutar la consulta
		try {
      $this->result = $data["num1"] + $data["num2"];
      $sql = 'INSERT INTO numbers(num1,num2,result) VALUES ('.$data["num1"].','.$data["num2"].','.$this->result.')';
      $sth = $mbd->query($sql);
    } catch (PDOException $e) {
    	error_log("Error al realizar el insert: " . $e->getMessage());
      $this->error = "Hubo un error al guardar la información del usuario";
      return false;
    }

    return true;
  }
}

?>