<?php


$name = $_POST['name'];
$email= $_POST['email'];
$username = $_POST['username'];
$password  = $_POST['password'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "registration_db");



$query = "INSERT INTO `registration_db`.`reg_tbl` (
`ID` ,
`name` ,
`email` ,
`username` ,
`password`
)
VALUES (
'', '$name', '$email', '$username', '$password');";


mysqli_query($link, $query);
echo $query;


?>
<a href="Home.php">GO to Home</a>