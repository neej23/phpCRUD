<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD);

//checking the connection

if(!$connection){
    die("Connection Failed");
}
// echo"success";
?>