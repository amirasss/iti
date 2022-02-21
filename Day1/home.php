<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Information about user</h3>
    <ul>
        <?php echo "<li> First name is " . $_GET['fname'] . "</li>" ?>
        <?php echo "<li> Last name is " . $_GET['lname'] . "</li>" ?>
        <?php echo "<li> Address is " . $_GET['address'] . "</li>" ?>
        <?php echo "<li> Country is " . $_GET['select'] . "</li>" ?>
        <?php echo "<li> Gender is " . $_GET['gender'] . "</li>" ?>
        <?php
        $course = (isset($_GET['skill'])) ? $_GET['skill'] : array(); ?>
        <li><strong>Courses :</strong>
            <?php
            if (count($course) > 0) {
                foreach ($course as $course) {
                    echo $course . ' <br>';
                }
            } else {
                echo "No course has been selected";
            }
            ?>
        </li>
        <?php echo "<li> UserName is " . $_GET['username'] . "</li>" ?>
        <?php echo "<li> department is open source</li>" ?>    
    </ul>
</body>

</html>