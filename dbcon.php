<?php

$con = mysqli_connect("localhost","root","","consulta");
mysqli_set_charset($con,"utf8");
// Check connection
if (!$con)
  {
  echo "Falha ao conectar ao servidor: " . mysqli_connect_error();
  }
?>
