<?php
// Multiple recipients
$to = 'joao_rocha13@hotmail.com'; // note the comma

// Subject
$subject = 'Agenda';

// Message
$message = file_get_contents('agenda_exames.php');

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: João <joao_rocha13@hotmail.com>';
$headers[] = 'From: Teste <joao15910@gmail.com>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>
