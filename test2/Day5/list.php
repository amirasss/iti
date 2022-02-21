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
    session_start();
        if($_COOKIE['fname']){
            echo "<h2>Welcome {$_COOKIE['fname']} {$_COOKIE['lname']}</h2>";
        }
        else{
            header("Location:login.php");
        }
        // echo $_SESSION['password'];
    ?>
    <a href="index.php">Add Student</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Adress</th>
            <th>Country</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Department</th>
            <th>Image Name</th>
        </tr>
        <?php
        try {
            //code...
            $pdo = new pdo("mysql:host=localhost;dbname=track_php", "root");
            $data=$pdo->query("select * from student");
            while ($row=$data->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                foreach($row as $value){
                    echo "<td>$value</td>";
                }
                echo "<td><a href='studentController.php?id={$row['id']}&delete'>Delete</a></td>";
                echo "<td><a href='studentController.php?id={$row['id']}&edit'>Edit</a></td>";
                echo "<td><a href='studentController.php?id={$row['id']}&show'>Show</a></td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $pdo = null;

        ?>
    </table>
</body>

</html>