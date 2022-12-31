<?php
$con=mysqli_connect("localhost","root","", "xyz"); 

if(!$con){
    echo "Connection Failed". mysqli_connect_error();
}
?>