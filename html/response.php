<?php
if (isset($_POST)){
  include("process.php");
  $pro = new Registro();
  if($pro->regNumbers($_POST)){
    echo "Los números se sumaron y se guardaron satisfactoriamente y el resultado es ".$pro->result;
  }
  else{
    echo $pro->error;
  }
  exit();
}
else {
  header('Location:/../../suma.php');
}