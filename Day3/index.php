<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mysql.php" method="get" > 
        <label for="">First Name</label>
        <input type="text" name="fname"><br><br>
        <label for="">Last Name</label>
        <input type="text" name="lname"><br><br>
        <label for="">Address</label><br>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
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
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br><br>
        
        <label for="">Username</label>
        <input type="text" name="username"><br><br>
        <label for="">Password</label>
        <input type="password" name="password"><br><br>
        <label for="">Department</label>
        <input type="text" name="department" placeholder="OpenSource" value="OpenSource"><br><br>
        Sh567f <br>
        <input type="text">Please insert the code <br><br>
        <input type="submit"> 
        <input type="reset">
    </form>
</body>

</html>