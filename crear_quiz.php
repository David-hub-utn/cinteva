<?php


$data= json_decode($_POST['data']);
print_r($data);

//$json_archivo = json_encode($data);
//$handler = fopen("questions10.json", "w+");
//fwrite($handler, $json_archivo);
//fclose($handler); 

  // here i would like use foreach:
$query = "";
  foreach($data as $d){
    print_r($d -> question);
    $query =  "INSERT INTO preguntas(pregunta,respuesta1,respuesta2,respuesta3) VALUES (" + $d -> question + "," + $d -> response1 +"," + $d -> response2 + "," + $d -> response3 + ")";
  }

echo "succesful";

?>