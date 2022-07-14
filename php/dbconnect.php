<?php

$dbcon=mysqli_connect("127.0.0.1","root","");

if(!$dbcon){
  echo "A liga&ccedil&atildeo ao MySQL falhou!"; exit;
}
else {
  echo "A liga&ccedil&atildeo ao MySQL foi bem sucedida!";
}


 ?>
