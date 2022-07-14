<?php

include 'dbconnect.php';
$username = $_POST['username'];
echo "<p>";

$select= mysqli_select_db($dbcon, 'alunos');


$search="SELECT * FROM info WHERE username='$username'";
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

 <html>
 <head><title></title></head>
 <body>
   <input type="submit" name="submit" value="Alterar" onsubmit="/website/alter.php">
   <input type="submit" name="submit" value="Apagar Utilizador" onsubmit="/website/delete.php">
 </body>
 </html>
