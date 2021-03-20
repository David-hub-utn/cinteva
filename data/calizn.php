<?php

//Se hace una única llamada al método todo() xD (Lo se, no era necesario el método desde aquí, pero así en lugar de redireccionar a este archivo cuando inserten las preguntas a la base de datos, solo llamaremos a este método desde otro archivo)

function todo(){//Comienza el método todo ()
$path="preguntas.json";//Se declara variable

unlink($path);//Se borra el archivo questions10.json para actualizarlo
$PREGUNTA="";
$RESP="";
$array=array(//Comienza el arreglo de nombre $array
"1"=>array(
"question"=>$PREGUNTA,
"answers"=>array(
	"1"=>array(
		"answer"=>$RESP,"istrue"=>true
	),
	"2"=>array(
		"answer" =>$RESP,"istrue"=>false

	),
	"3"=>array(
		"answer"=>$RESP,"istrue"=>false
	)
)
),
"2"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"3"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"4"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"5"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"6"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"7"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"8"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"9"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
"10"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
  "11"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
  "12"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
  "13"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
  "14"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  ),
  "15"=>array(
    "question"=> $PREGUNTA,
    "answers"=>array(
      "1"=>array(
        "answer"=> $RESP,"istrue"=> true
      ),
      "2"=>array(
        "answer"=> $RESP,"istrue"=> false
      ),
      "3"=>array(
        "answer"=> $RESP,"istrue"=> false
      )
    )
  )
);
//Termina el arreglo de nombre $array

$id=1;//Se declara la variable que sirve como contador para las consulatas de respuesta y preguntas retomando su id

do{//Comienza el DO
include "Conexion/conexion00.php";
//Empieza el select de la tabla preguntas
$result= $conexion00->query("SELECT * FROM preguntas where PREG_ID=$id");
 //$query = "SELECT * FROM preguntas where PREG_ID=$id";
 //$result = mysql_query ( $query, $conexion00 );	
 //termina select de la tabla preguntas

//Empieza el select de la tabla respuestas
$resultS= $conexion00->query("SELECT * FROM respuestas where RESP_ID=$id");
 //$queryS = "SELECT * FROM respuestas where RESP_ID=$id";
 //$resultS = mysql_query ( $queryS, $conexion00 );
 //termina select de la tabla respuestas


/*include "Conexion0/conexion00.php";
//Empieza el select de la tabla preguntas
 $query = "SELECT * FROM preguntas where PREG_ID=$id";
 $result = mysqli_query ( $query, $conexion00 );	
 //termina select de la tabla preguntas

//Empieza el select de la tabla respuestas
 $queryS = "SELECT * FROM respuestas where RESP_ID=$id";
 $resultS = mysqli_query ( $queryS, $conexion00 );
 //termina select de la tabla respuestas*/
 ?>



<?php	while ( $rowS = mysqli_fetch_array ( $resultS ) ){//Este es el resultado de la consulta de la tabla respuestas *Aquí comienza?>
	<?php 
//Comienza el llenado de los arreglos de respuestas
for($i=1;$i<4;$i++){
		if($i==1){
	$array[$id]["answers"][$i]["answer"]="$rowS[RESP_CORRECTA]";
}
elseif($i==2){
	$array[$id]["answers"][$i]["answer"]="$rowS[RESP_FALSAUNO]";
}
else{
	$array[$id]["answers"][$i]["answer"]="$rowS[RESP_FALSADOS]";
}
	}//Aquí termina el llenado de respuestas
	?>

<?php	}//Aquí termina el resultado de la consulta de la tabla respuestas*?>






 <?php	while ( $row = mysqli_fetch_array ( $result ) ){//Este es el resultado de la consulta de la tabla preguntas *Aquí comienza ?>

	<?php
	$array[$id]["question"]="$row[PREG_CONTENIDO]";
//Comienza el llenado de los arreglos de preguntas 
/*if($id==1){
	$array[$id]["question"]="$row[PREG_CONTENIDO]";
}
elseif($id==2){
	$array[$id]["question"]="$row[PREG_CONTENIDO]";
}
else{
	$array[$id]["question"]="$row[PREG_CONTENIDO]";
}//Aquí termina el llenado de preguntas*/
	?>

<?php	}//Aquí termina el resultado de la consulta de la tabla respuestas*?>




<?php $id++; }while ( $id <= 15)//Termina el DO ?>

<?php
//Se crea y actualiza el quiz "questions10.json"
$json_archivo = json_encode($array);
$handler = fopen("preguntas.json", "w+");
fwrite($handler, $json_archivo);
fclose($handler); 

}//Termina el método todo()
todo();
?>



