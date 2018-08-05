<?php

/* conectar*/
    /* Bar simps */

    $mysqli=  mysqli_connect('127.0.0.1','root','','tienda');


/* verificar la conexion */

if(mysqli_connect_errno($mysqli)){
    
    
    echo 'fallo pendejo:' . mysqli_connect_error();
}

/* sentencia */
$query= mysqli_query($mysqli,"SELECT nombre,precio  FROM productos");
/* Imprimir filas */ 
while($fila = mysqli_fetch_assoc($query)){
    
    echo $fila['nombre'] . ' cueta ' . $fila['precio'] .PHP_EOL;
}