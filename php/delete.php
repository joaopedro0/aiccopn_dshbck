<?php

include 'dbconnect.php';
$username = $_POST['username'];
echo "<p>";

$select= mysqli_select_db($dbcon, 'alunos');


$search="DELETE * FROM info WHERE username='$username'";
$result=mysqli_query($dbcon,$search);

if($search){
  echo "Utilizador apagado com sucesso!";
}


 ?>
 <html>
 <head><title></title></head>
 <body>
   <input type="submit" name="submit" value="Menu" onsubmit="/website/delete.php">
   <?php Header('Location: /website/login.php')?>
 </body>
 </html>
