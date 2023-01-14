<?php

   $connection = mysqli_connect('localhost','u222490516_fourthdm','1Mn=#c3S','u222490516_fd');

   if(isset($_POST['send'])){
      $Username = $_POST['Username'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $comment = $_POST['comment'];
      

      $request = " insert into contact_table(Username, email, mobile, comment) values('$Username','$email','$mobile','$comment') ";
      $fire=mysqli_query($connection, $request) or die('cannot connect');
      if($fire==true)
      {
          $message = 'Success';
          header("location:./contact.php");
      }
      else
      {
          echo ''.mysql_error();
      }
  
     

   }

?>