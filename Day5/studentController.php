<?php
        require("db.php");
    $db=new db();
    $pdo=$db->get_connection();    
    if (isset($_POST['addstudent'])) {
        # code...
       
            $fname=validation($_POST['fname']);
            $lname=validation($_POST['lname']);
            $address=validation($_POST['address']);
            $country=validation($_POST['country']);
            $gender=validation($_POST['gender']);
            $email=validation($_POST['email']);
            $password=validation($_POST['password']);
            $department=validation($_POST['department']);
            $img=validation($_POST['img']);
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
            header("Location:index.php?error=$errorArray");
        }
        if(!move_uploaded_file($_FILES['img']['tmp_name'],"imgs/".$_FILES['img']['name'])){
            $errors['img']="Failed to upload file";
        }
        $imgExtention=pathinfo($_FILES['img']['tmp_name'],PATHINFO_EXTENSION);
        $allowedExten=['jpg,png'];
        if(!in_array($imgExtention,$allowedExten)){
            $errors['img_ext']="Allowed Extenion is jpg and png";
        }
        else{
            // var_dump($_FILES['img']['tmp_name']);
        //     move_uploaded_file($_FILES['img']['tmp_name'],"imgs/".$_FILES['img']['name']);
        //     try{
        //     $pdo->query("INSERT INTO student
        //     SET
        //         `fname` = '$fname',
        //         `lname` = '$lname',
        //         `address` = '$address',
        //         `country` = '$country',
        //         `gender` = '$gender',
        //         `email`='$email',
        //         `password`='$password',
        //         `department`='$department',
        //         `img`='$img'");
        //         header("Location:list.php");
        // } catch (PDOException $e){
        //     echo $e->getMessage();
        // }
    }
       
    }
    elseif(isset($_GET['delete'])){
        $id=$_GET['id'];

        try {
            //code...
            //$pdo->query("delete from student where id=$id");
            $db->delete("student","id=$id");
            header("Location:list.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    elseif(isset($_GET['show'])){
        $id=$_GET['id'];
        try {
            //code...
           //$data= $pdo->query("select *  from student where id=$id");
           $data=$db->select(" * ","student","id=$id");
           $studentInfo=$data->fetch(PDO::FETCH_ASSOC);
           $data=json_encode($studentInfo);
           header("Location:show.php?data=$data");
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
       
    }
    elseif(isset($_GET['edit'])){
        $id=$_GET['id'];
        try {
            //code...
           //$data= $pdo->query("select *  from student where id=$id");
           $data=$db->select(" * ","student","id=$id");
           $studentInfo=$data->fetch(PDO::FETCH_ASSOC);
           $data=json_encode($studentInfo);
           header("Location:edit.php?data=$data");
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
       
    }
    elseif(isset($_POST['login'])){
        $data=$db->select(" * ","student","email='{$_POST['email']}' and password='{$_POST['password']}'");
        //$data=$pdo->query("select * from student where email='{$_POST['email']}' and password='{$_POST['password']}' ");
        if($data){
            $studentInfo=$data->fetch(PDO::FETCH_ASSOC);
            setcookie('fname',$studentInfo['fname']);
            setcookie('lname',$studentInfo['lname']);
            session_start();
            $_SESSION['password']=$studentInfo['password'];
            header("Location:list.php");
        }
        else{
            header("Location:login.php");
        }
    }
    function validation($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $pdo=null;
