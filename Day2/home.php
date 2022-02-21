<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
        if($_GET){            
            $student = $_GET['fname'] . "," . $_GET['lname'] . "," . $_GET['address'] . "," . $_GET["select"] . "," . $_GET["gender"] . "," . $_GET["username"] . "," . $_GET["department"];
            file_put_contents("db.txt", $student . "\n", FILE_APPEND);
            $studentData=file("db.txt");
            
            foreach($studentData as $key=>$student){
                echo "<tr>";
                $studentInfo=explode(",",$student);
                
                echo "<td>".($key+1)."</td>";
                foreach($studentInfo as $value){
                    
                    echo "<td>$value</td>";
                }
                echo "<td><a href='delete.php?row=$key'>Delete</a></td>";
            }
        }
        else{
            $studentData=file("db.txt");
            foreach($studentData as $key=>$student){
                echo "<tr>";
                $studentInfo=explode(",",$student);
                
                echo "<td>".($key+1)."</td>";
                foreach($studentInfo as $value){
                    
                    echo "<td>$value</td>";
                }
                echo "<td><a href='delete.php?row=$key'>Delete</a></td>";
            }
        }
       
        
        ?>
    </table>
</body>

</html>