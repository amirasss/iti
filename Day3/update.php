<?php

try {
    //code...
    $pdo = new pdo("mysql:host=localhost;dbname=track_php", "root");
    $id=$_GET['id'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $address = $_GET['address'];
    $country = $_GET['country'];
    $gender = $_GET['gender'];
    $username = $_GET['username'];
    $department = $_GET['department'];
    $data = $pdo->query("update student set
        fname='$fname',
        lname='$lname',
        address='$address',
        country='$country',
        gender='$gender',
        username='$username',
        department='$department'
     where id=$id");
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
