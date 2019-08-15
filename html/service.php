<?php
include("process.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST["num1"]) && isset($_POST["num2"])){
        $pro = new Registro();
        if($pro->regNumbers($_POST)){
            $input['status'] = "OK";
            $input['message'] = "Los números se sumaron y se guardaron satisfactoriamente y el resultado es ".$pro->result;
        }
        else{
            $input['status'] = "ERROR";
            $input['message'] = $pro->error;
        }
    }
    else{
        $input['status'] = "ERROR";
        $input['message'] = "Parámetros inválidos";
    }
    header("HTTP/1.1 200 OK");
    echo json_encode($input);
    exit();
}
header("HTTP/1.1 400 Bad Request");
?>