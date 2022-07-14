<?php
include_once("dbcon.php");

if(isset($_POST['submit'])) {
  $CodConsulta = $_POST['CodConsulta'];
  $CodCliente=$_POST['CodCliente'];
  $CodClinica=$_POST['CodClinica'];
  $DataExame=$_POST['DataExame'];
  $Preco=$_POST['Preco'];
  $Hora=$_POST['Hora'];
  $TipoExame=$_POST['TipoExame'];

//insert data to database
  $result = mysqli_query($con, "INSERT INTO consultas(CodConsulta,CodCliente,CodClinica,DataExame,Preco,Hora,TipoExame)
  VALUES('$CodConsulta','$CodCliente','$CodClinica','$DataExame','$Preco','$Hora','$TipoExame')");


        ?>
