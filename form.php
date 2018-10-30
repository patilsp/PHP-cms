<?php

if(isset($_POST['submit'])){


$name = array("Vishal", "Santosh", "Maria", "Studnet");
$minimum = 5;
$maximum = 10;

$username = $_POST['username'];
$password = $_POST['password'];


    if(strlen($username) < $minimum){

        echo "Username has to be longer than five";

    }
    if(strlen($username) > $maximum){
        echo " Username cannot to be longer than ten character";
    }

    if(!in_array($username,$name)){
        echo " Welcome ". $username;

    }else
    {
        echo "You first register to our website";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form page</title>
</head>
<body>

    <form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter Email">
    <br>
    <input type="password" name="password" placeholder="Enter Password">
    <br>

    <input type="submit" name="submit">

</body>
</html>
