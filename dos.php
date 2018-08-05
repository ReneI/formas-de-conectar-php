<?php

/* Conectar */
 

$mysql = new mysqli('localhost', 'root', '', 'tienda');

if($mysql->connect_errno){
    echo 'Fallo al conectar' . $mysql->connect_error;
}
   
$sql ="INSERT INTO productos (nombre, talla, precio) VALUES (?,?,?)"; 

$c = $mysql->prepare($sql);
   
   if(!$c){
       
       echo "fallo: ({$c->errno}) {$c->error}.\n" ;
   }
   
   $camise = 'Camise loco';
   $tall ='S';
   $precio = 30404;
   


 if(!$c->bind_param('ssi', $camise, $tall, $precio)){
     echo "Fallo al preparr :({$mysql->errno}) {$mysql->error} .\n";
     
     
 }
   
   if(!$c->execute()){
       
       echo "Fallo al ejecutar.";
   }else{
       
       echo "{$c->affect_rows} Fila insertada.\n ";
   }
   

?>