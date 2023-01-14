
 <?php 
 $connection = mysqli_connect('localhost','root','','fd');
 $filename ="servicesForm.json";
 $data = file_get_contents($filename);
 $array= json_decode($data,true); 
 foreach ($array  as $value) {
   $query ="INSERT INTO `services_form` (`brand`, `Username`, `email`, `mobile`, `bname`) VALUES ('".$value[brand]."', '".$value[Username]."', '".$value[email]."', '".$value[mobile]."', '".$value[bname]."')";
   mysqli_query($connection, $query);
}
echo "Inserted";
 ?>