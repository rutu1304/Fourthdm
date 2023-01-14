<?php

   $connection = mysqli_connect('localhost','u222490516_fourthdm','1Mn=#c3S','u222490516_fd');

   if(isset($_POST['submit'])){
      $check=$_POST['brand'];
      $brand=implode(",",$check);
 
  
$Username = $_POST['Username'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
       $bname = $_POST['bname'];
      $request = " insert into services_form(brand,Username ,email, mobile, bname) values('$brand','$Username','$email','$mobile','$bname') ";
      $fire=mysqli_query($connection, $request);
      if($fire==true)
      {
          $message = 'Success';
          header("location:./services.php");
      }
      else
      {
          echo ''.mysql_error();
      }
   }
  
?>