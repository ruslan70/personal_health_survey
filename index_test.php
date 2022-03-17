<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <?php include "inc/head_styles.php" ?>
        <title>Form</title>
    </head>
    <body>
<?php
$firstName = 'Rusaln';
$lastName = 'Khatuev';
$age = 51;
echo "<div id=\"result\">Hello $firstName $lastName, you are $age years old.</div>";

?>
</body>                     
        <?php include 'inc/footer.php';?>  
</html>