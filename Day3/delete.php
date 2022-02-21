<?php
    $id=$_GET['id'];

    try {
        //code...
        $pdo = new pdo("mysql:host=localhost;dbname=track_php", "root");
        $pdo->query("delete from student where id=$id");
        header("Location:list.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>