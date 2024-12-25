<?php 
  if(isset($_POST['submit'])){
      
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $comments=$_POST['comments'];
      
      $to='ankitamarkhedkar@gmail.com';
      $subject='Gorav Poymers Enquiry Form Submission';
      $message="Name: ".$name."\n"."Phone:" .$phone."\n"."Message:" .$comments."\n";
      $headers="From:".$email;
      if(mail($to, $subject, $message, $headers)){
          header( "Location: thanku.php" );
      }
      else {
          echo "Something went wrong";
      }
  }
?>

