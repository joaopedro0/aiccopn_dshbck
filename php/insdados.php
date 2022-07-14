
<?php

include 'dbconnect.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$turma = $_POST['turma'];
$ano = $_POST['ano'];
$username = $_POST['username'];
$password = $_POST['password'];

$select= mysqli_select_db($dbcon, 'alunos');

if(!$select) {
  echo "A abertura da BD falhou!"; exit;
} else {
  echo "Liga&ccedil&atildeo ao MySQL estabelecida com sucesso!"."<br>";
  if($exist_err = "SELECT * FROM info WHERE email= '$email' OR username='$username'");
  $faz_existe=mysqli_query($dbcon,$exist_err);
  $alexist=mysqli_num_rows($faz_existe);
  echo "O aluno já se encontra registado!";}

    if($exist_err= 0){
    $res = mysqli_query($dbcon, "INSERT into info VALUES ('$email','$nome','$idade','$turma','$ano','$username','$password')");
    echo "Utilizador registado com sucesso!";
    mysqli_close($dbcon);
  }







 ?>
