<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

 if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['chooseOption'];
   $message = $_POST['message'];

   if(empty($_POST["name"]))
 {
  echo "<script>alert('You should enter your name.')</script>
    <script>
      window.location.href = 'http://localhost:8080/ContactUs.html';
    </script>";
 }

 elseif(empty($_POST["email"]))
 {
  echo "<script>alert('You should provide an Email Id.')</script>
    <script>
      window.location.href = 'http://localhost:8080/ContactUs.html';
    </script>";
 }
 elseif ($_POST["email"] != filter_var($email, FILTER_VALIDATE_EMAIL)) {

   echo "<script>alert('You should valid Email Id.')</script>
    <script>
      window.location.href = 'http://localhost:8080/ContactUs.html';
    </script>";
  }

 elseif(empty($_POST["message"]))
 {
  echo "<script>alert('Provide a message for us.')</script>
    <script>
      window.location.href = 'http://localhost:8080/ContactUs.html';
    </script>";
 }
 else
 {
   $mail = new PHPMailer();
  $mail->IsSMTP(true);        //Sets Mailer to send message using SMTP
  $mail->Host = "smtp.gmail.com";  //Sets the SMTP hosts
  $mail->Port = "465";        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = "";     //Sets SMTP username  recipent gmailmail id
  $mail->Password = "";     //Sets SMTP password  recipent actual gmail password
  $mail->SMTPSecure = "ssl";       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = $email;     //Sets the From email address for the message
  $mail->FromName = $name;    //Sets the From name of the message
  $mail->AddAddress("avishr75@gmail.com");//Adds a "To" address
  $mail->AddCC = $email;
  $mail->IsHTML(true);       //Sets message type to HTML
  $mail->Subject = "Enquiry from websites submitted by $name";    //Sets the Subject of the message
  $mail->Body = "
  <table width='450px'>
  <tr>
  <td> Name:</td>
  <td>$name</td>
  </tr>
  <tr>
  <td> Email:</td>
  <td>$email</td>
  </tr>
  <tr>
  <td> Subject:</td>
  <td>$subject</td>
  </tr>
  <tr>
  <td> Message:</td>
  <td>$message</td>
  </tr>
  </table>
  ";

  if (! $mail->send()) {
        echo "<script>alert('submission failed.')</script>";

      }
  else{
    echo "<script>alert('Your message has been sent successfully. We will get back to you soon. Thanks for contacting us.')</script>
    <script>
      window.location.href = 'http://test.sslfreight.com.np/ContactUs.html';
    </script>";
  }
  }
  }

?>
