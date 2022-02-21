<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        $errors = json_decode($_GET['error'], true);
        // var_dump($errors);
    }
    if($_COOKIE['fname']){
        echo "<h2>Welcome {$_COOKIE['fname']} {$_COOKIE['lname']}</h2>";
    }
    else{
        header("Location:login.php");
    }
    ?>
    <form action="studentController.php" method="post" enctype="multipart/form-data">
        <label for="">First Name</label>
        <input type="text" name="fname"><br><br>
        <?php if(isset($errors['fname'])){
            echo "<span style='color:red'>{$errors['fname']}</span><br><br>";
        }?>
        <label for="">Last Name</label>
        <input type="text" name="lname"><br><br>
        <?php if(isset($errors['lname'])){
            echo "<span style='color:red'>{$errors['lname']}</span><br><br>";
        }?>
        <label for="">Address</label><br>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
        <?php if(isset($errors['address'])){
            echo "<span style='color:red'>{$errors['address']}</span><br><br>";
        }?>
        <label for="">Country</label>
        <select name="country">
            <option value="">Choose</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
        </select><br><br>
        <?php if(isset($errors['country'])){
            echo "<span style='color:red'>{$errors['country']}</span><br><br>";
        }?>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br><br>
        <?php if(isset($errors['gender'])){
            echo "<span style='color:red'>{$errors['gender']}</span><br><br>";
        }?>
        <label for="">Email</label>
        <input type="text" name="email"><br><br>
        <?php if(isset($errors['email'])){
            echo "<span style='color:red'>{$errors['email']}</span><br><br>";
        }?>
        <label for="">Password</label>
        <input type="password" name="password"><br><br>
        <?php if(isset($errors['password'])){
            echo "<span style='color:red'>{$errors['password']}</span><br><br>";
        }?>
        <label for="">Department</label>
        
        <input type="text" name="department"><br><br>
        <?php if(isset($errors['department'])){
            echo "<span style='color:red'>{$errors['department']}</span><br><br>";
        }?>
        <!-- <input type="file" name="img"><br><br> -->
        
        <input type="submit" name="addstudent">
        <input type="reset">
    </form>
</body>

</html>
