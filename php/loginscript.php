<?php

include 'dbconnect.php';


$username = $_POST['username'];
$password = $_POST['password'];

$select= mysqli_select_db($dbcon, 'alunos');

if(!$select) {
  echo "A abertura da BD falhou!"; exit;
} else {
  echo "Liga&ccedil&atildeo ao MySQL estabelecida com sucesso!"."<br>";
  $auth = mysqli_query($dbcon,"SELECT * FROM info WHERE username = '$username'  and password ='$password'");
	$count  = mysqli_num_rows($auth);
	if($count==0) {
    mysqli_close($dbcon);
    Header('Location: /login.php');
	} else {
    session_start();
    $_SESSION['username']=$count['username'];
    Header('Location: /index.php');

	}
}





 ?>
