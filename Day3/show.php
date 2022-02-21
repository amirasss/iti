<?php
    $id=$_GET['id'];
 try {
     //code...
     $pdo = new pdo("mysql:host=localhost;dbname=track_php", "root");
    $data= $pdo->query("select *  from student where id=$id");
    $studentInfo=$data->fetch(PDO::FETCH_ASSOC);
    echo "<ul>";
    echo " <a href='index.php'>Add Student</a>";
    echo " <a href='list.php'>List Student</a>";
        foreach ($studentInfo as $value) {
            echo "<li>$value</li>";
        }
    echo "</ul>";
 } catch (PDOException $e) {
    echo $e->getMessage();
 }

?>