<?php
$path="questionsHOY.json";//Se declara variable

unlink($path);//Se borra el archivo questions10.json para actualizarlo
//include "Conexion/conexion00.php";//aquí incluyes la conexion
$data= json_decode($_POST['data']);
print_r($data);

//$json_archivo = json_encode($data);
//$handler = fopen("questions10.json", "w+");
//fwrite($handler, $json_archivo);
//fclose($handler); 

  // here i would like use foreach:
$query = "";
$contador=1;
  foreach($data as $d){
      
    print_r($d -> question);//aquí imprimes 
  $pregunta=($d -> question);
  $respuesta1=($d -> response1);
  $respuesta2=($d -> response2);
  $respuesta_correcta=($d -> response3);
                    $servername = "localhost";
                    $username = "id11356717_cinteva";
                    $password = "12345678";
                    $dbname = "id11356717_cinteva";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection

                    
                    $sql = "CALL SP_Preg_upd('$contador','$pregunta')";
                    $sql2 = "CALL SP_Resp_upd('$contador','$respuesta1','$respuesta2','$respuesta_correcta','1')";
                    
                    if ($conn->query($sql) === TRUE){
                        echo "Insercción exitosa";  
                        echo "$sql";  
                    }
                    else{
                        echo "Insercción no exitosa";  
                    }
                                        if ($conn->query($sql2) === TRUE){
                        echo "Insercción exitosa";  
                    }
                    else{
                        echo "Insercción no exitosa";  
                    }
                    $contador=$contador+1;
    //include "caliz.php";
    //todo();
 /*$pregunta=($d -> question);
  $respuesta1=($d -> response1);
  $respuesta2=($d -> response2);
  $respuesta_correcta=($d -> response3);
$executeSP="CALL SP_Preg_ins('null','$pregunta');";
$callSP= $conexion00->query($executeSP);
//$callSP=mysql_query($executeSP,$conexion00);
$executeSP2="CALL SP_Resp_ins('null','$respuesta1','$respuesta2','$respuesta_correcta','1');";
$callSP2= $conexion00->query($executeSP2);
//$callSP2=mysql_query($executeSP2,$conexion00);

if($callSP && $callSP2){
echo "Insercción exitosa";  
}

else{
    echo "Insercción fallida";   

                    
  }*/
  }
 include "calizn.php";
 todo();
/*$json_archivo = json_encode($data);
$handler = fopen("questionsHOY.json", "w+");
fwrite($handler, $json_archivo);
fclose($handler); */

//echo "succesful";

?>