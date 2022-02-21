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
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        try {
            //code...
            $pdo = new pdo("mysql:host=localhost;dbname=track_php", "root");
            $data = $pdo->query("select *  from student where id=$id");
            $studentInfo = $data->fetch(PDO::FETCH_ASSOC);
            echo " <a href='index.php'>Add Student</a>";
            echo " <a href='list.php'>List Student</a>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } elseif(isset($_GET['update'])){

    }
    ?>

    <form action="update.php" method="get">
    <input type="hidden" name="id" value="<?= $studentInfo['id'] ?>">
        <label for="">First Name</label>
        <input type="text" name="fname" value="<?= $studentInfo['fname'] ?>"><br><br>
        <label for="">Last Name</label>
        <input type="text" name="lname" value="<?= $studentInfo['lname'] ?>"><br><br>
        <label for="">Address</label><br>
        <textarea name="address" id="" cols="30" rows="10"><?php echo $studentInfo['address']; ?></textarea><br><br>
        <label for="">Country</label>
        <select name="country" value="<?= $studentInfo['country'] ?>">
            
            <option value="Afghanistan" <?php if ($studentInfo['country'] == "Afghanistan") { ?>selected="selected" <?php } ?>>Afghanistan</option>
            <option value="Åland Islands" <?php if ($studentInfo['country'] == "Åland Islands") { ?>selected="selected" <?php } ?>>Åland Islands</option>
            <option value="Albania" <?php if ($studentInfo['country'] == "Albania") { ?>selected="selected" <?php } ?>>Albania</option>
            <option value="Algeria" <?php if ($studentInfo['country'] == "Algeria") { ?>selected="selected" <?php } ?>>Algeria</option>
            <option value="American Samoa" <?php if ($studentInfo['country'] == "American Samoa") { ?>selected="selected" <?php } ?>>American Samoa</option>
            <option value="Andorra" <?php if ($studentInfo['country'] == "Andorra") { ?>selected="selected" <?php } ?>>Andorra</option>
        </select><br><br>
        <label for="">Gender</label>
        <input type="radio" name="gender"  <?php if ($studentInfo['gender'] == "male") { ?>checked <?php } ?> value="male"> Male
        <input type="radio" name="gender" <?php if ($studentInfo['gender'] == "female") { ?>checked <?php } ?> value="female"> Female<br><br>

        <label for="">Username</label>
        <input type="text" name="username" value="<?= $studentInfo['username'] ?>"><br><br>

        <label for="">Department</label>
        <input type="text" name="department" placeholder="OpenSource" value="<?= $studentInfo['department'] ?>"><br><br>

        <input type="submit" value="Update student" name="update">

    </form>
</body>

</html>