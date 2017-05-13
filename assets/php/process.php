<?php
$to='rainarro96@gmail.com';
$subject='Portfoolio';

$email=$_POST['email'];
$username=$_POST['name'];
$textArea=$_POST['textArea'];

$body= <<<EMAIL

Soovin liituda uudiskirjaga,

Minu nimi on  $username

Minu email on $email

$textArea



EMAIL;

$header="From: $email";


if($_POST){ 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $hasError_email = "Email is required";
}
   

else{
      mail($to, $subject, $body, $header);
     echo 'OK';
   }

if (empty($_POST["name"])) {
    $hasError_name = "true";
  } else {
    $hasError_name = test_input($_POST["name"]);
     echo 'OK';
  }
 
}
?>