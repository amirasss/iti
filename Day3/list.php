<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Add Student</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Adress</th>
            <th>Country</th>
            <th>Gender</th>
            <th>UserName</th>
            <th>Department</th>
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
                echo "<td><a href='delete.php?id={$row['id']}'>Delete</a></td>";
                echo "<td><a href='edit.php?id={$row['id']}'>Edit</a></td>";
                echo "<td><a href='show.php?id={$row['id']}'>Show</a></td>";
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