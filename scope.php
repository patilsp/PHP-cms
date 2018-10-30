<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>variable scope</title>
</head>
<body>
    <!php

    $x = "outside";  //global
    function convert(){
    global $x;
    $x= "inside";// lical
    }
    echo $x;

    echo "<br>";
    convert();

    echo $x;


    echo $x;
    ?>
</body>
</html>
