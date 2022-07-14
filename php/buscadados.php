<?php

include 'dbconnect.php';

echo "<p>";

$select= mysqli_select_db($dbcon, 'alunos');


$search="SELECT * FROM info";
$result=mysqli_query($dbcon,$search);

if($result) {
  while ($bd_campo=mysqli_fetch_array($result)) {
    echo "E-mail do utilizador: ".$bd_campo["email"]."<br>";
    echo "Nome do utilizador: ".$bd_campo["nome"]."<br>";
    echo "Idade do utilizador: ".$bd_campo["idade"]."<br>";
    echo "Turma do utilizador: ".$bd_campo["turma"]."<br>";
    echo "Ano do utilizador: ".$bd_campo["ano"]."<br>";
    echo "Username do utlizador: ".$bd_campo["username"]."<br>";
    echo "Password do utilizador: ".$bd_campo["password"]."<br>";
    echo "<p>";
  }}


    ?>
