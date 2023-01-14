<?php

if(isset($_POST['submit'])){
     $new_message= array(
       "checkbox"=>$_POST['brand'],
       "name" =>$_POST['Username'],
        "email" =>$_POST['email'],
        "number" =>$_POST['mobile'],
        "bname" =>$_POST['bname'],
    );
    if(filesize("servicesForm.json")==0){
        $first_record = array($new_message);
        $data_to_save = $first_record;
    }else{
        $old_records = json_decode(file_get_contents("servicesForm.json"));
       array_push($old_records,$new_message);
       $data_to_save=$old_records;

    }
    if(!file_put_contents("servicesForm.json",json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX)){
        $error = "Error storing info"; }
        else{
            $success=" Form is successfully submitted";
            
            header("location:home.php #Services-form");
            echo"$suceess";
        }
}

?>