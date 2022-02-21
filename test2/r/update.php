<?php

try {
    //code...
    //$pdo = new pdo("mysql:host=localhost;dbname=track_php", "root");
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
  
    // $data = $pdo->query("update student set
    //     fname='$fname',
    //     lname='$lname',
    //     address='$address',
    //     country='$country',
    //     gender='$gender',
    //     email='$email',
    //     department='$department'
        
    //  where id=$id");
     $data =$db->update("student","fname='$fname',
     lname='$lname',
     address='$address',
     country='$country',
     gender='$gender',
     email='$email',
     department='$department'","id=$id");
     if ($data) {
         # code...
         $studentInfo = $data->fetch(PDO::FETCH_ASSOC);
    }else{
        echo "No data";
    }

    header("Location:list.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
