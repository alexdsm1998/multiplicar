<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tablas de multiplicar</title>
  </head>
  <body>

  </body>
</html>
<?php

//array
$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11,
];


//estructura foreach
foreach ($tablas as $valor){
echo "<h1>Tabla del $valor </h1>";


//estructura for

for ($i=1; $i <=10 ; $i++){
$mutiplicar= $i * $valor;
      echo " $valor x $i = $mutiplicar <br>" ;
 }
}











 ?>
  </body>
</html>
