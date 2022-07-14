<?php 

require_once('../PHPMailer-master/src/class.PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if(isset($_POST['submit_agenda'])){ 

$getemail = $_POST['email'];

$email = new PHPMailer();
$email->SetFrom('joao15910@gmail.com', 'João Pedro'); //Name is optional
$email->Subject   = 'Agenda para Exames Médicos';
$email->Body      = 'teste';
$email->AddAddress( '$getemail' );

/*$file_to_attach = './agenda_exames.php';

$email->AddAttachment( $file_to_attach , 'agenda_exames.php' );*/

return $email->Send();

header('location:agenda_exames.php');

}





?>

