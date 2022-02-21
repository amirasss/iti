<?php
    try {
        //code...
        $pdo=new pdo("mysql:host=localhost;dbname=track_php","root");
        $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $address=$_GET['address'];
        $country=$_GET['country'];
        $gender=$_GET['gender'];
        $username=$_GET['username'];
        $department=$_GET['department'];
        $pdo->query("INSERT INTO student
        SET
            `fname` = '$fname',
            `lname` = '$lname',
            `address` = '$address',
            `country` = '$country',
            `gender` = '$gender',
            `username`='$username',
            `department`='$department'");
            header("Location:list.php");
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    $pdo=null;
?>