<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = "tayo.wope.2008@gmail.com";
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $message .= "\r\n\r\nName: $name\r\nEmail: $email\r\nSubject: $subject";
  mail($to, $subject, $message, $headers);
  echo "success";
}
?>
