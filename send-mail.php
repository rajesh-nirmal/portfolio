<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['subject'];
    $comment = $_POST['message'];
    // $message = $_POST['message'];
    // $date = $_POST['date'];
    // $time = $_POST['time'];
    
    $to = "rajeshnirmal444@gmail.com";
    
    $subject = "New Message from - Name: $name, Subject: $number ";
    
    $messagetxt = "Name: $name\nEmail: $email\nSubject: $number\nMessage: $comment";
    $headers  .= 'MIME-Version: 1.0' . "\r\n";
    
  if(mail($to,$subject,$messagetxt,$headers))
  {
      // echo "mail sent successfully";
     header("Location:thank.html");
      
  }
  else
  {
      echo "mail not sent";
  }
}
?>
