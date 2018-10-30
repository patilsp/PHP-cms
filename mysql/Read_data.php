<?php

$connection = mysqli_connect('localhost','root','','loginapp');
if($connection)
   {
    echo " We Are connected ";

}else
{
    die (" Database connection failed ");

}


$query = " SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result){

die('query failed'. mysqli_error());
}





while ($row = mysqli_fetch_row($result)){
    print_r($row);
}

while ($row = mysqli_fetch_assoc($result)){
    print_r($row);
}


?>
