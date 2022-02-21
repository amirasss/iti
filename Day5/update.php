<?php

require("db.php");
    $db=new db();

    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $errors=[];
        if (strlen($fname<3)) {
           $errors['fname']="First Name must be more than 3 char";
        }
        if (strlen($lname<3)) {
            $errors['lname']="Last Name must be more than 3 char";
        }
        if (strlen($address<3)) {
            $errors['address']="address must be more than 3 char";
        }
        if ($_POST['country']=="") {
            $errors['country']="Choose country";
        }
        if ($_POST['gender']=="") {
            $errors['gender']="Choose gender";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']="Not valide email";
        }
        if (strlen($password<5)) {
            $errors['password']="Password must be more than 5 char";
        }
        if (strlen($department<3)) {
            $errors['department']="department must be more than 3 char";
        }
        if(count($errors)>0){
            $errorArray=json_encode($errors);
            header("Location:edit.php?error=$errorArray");
        }
        else{
        try{
      
            
    // $data = $pdo->query("update student set
    //     fname='$fname',
    //     lname='$lname',
    //     address='$address',
    //     country='$country',
    //     gender='$gender',
    //     email='$email',
    //     department='$department',
    //     img='$img'
    //  where id=$id");
    $data=$db->update("student","
        fname='$fname',
        lname='$lname',
        address='$address',
        country='$country',
        gender='$gender',
        email='$email',
        department='$department'
       
    ","id=$id"
   
 );

     if ($data) {
         # code...
         $studentInfo = $data->fetch(PDO::FETCH_ASSOC);
    }else{
        echo "No data";
    }

    header("Location:list.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}}
