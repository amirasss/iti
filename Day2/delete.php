<?php
    $remove=$_GET['row'];
    $data=file("db.txt", FILE_IGNORE_NEW_LINES);
    unset($data[$remove]);
    // $string = preg_replace('/\s+/', ' ', trim($string));
    $filedata=implode("\n",$data);
    file_put_contents("db.txt",$filedata);
    header("Location:home.php");
    // echo "<a href='home.php'>Back</a>"
?>