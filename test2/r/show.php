<?php
if($_COOKIE['fname']){
    echo "<h2>Welcome {$_COOKIE['fname']} {$_COOKIE['lname']}</h2>";
}
else{
    header("Location:login.php");
}
     $studentInfo=json_decode($_GET['data']);
     echo "<ul>";
     echo " <a href='index.php'>Add Student</a>";
     echo " <a href='list.php'>List Student</a>";
         foreach ($studentInfo as $value) {
             echo "<li>$value</li>";
         }
     echo "</ul>";

?>