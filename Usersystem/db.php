<?php
$sname="localhost";
$rname="root";
$spassword="";
$db_name="registration";
$conn=mysqli_connect($sname,$rname,$spassword,$db_name);
if(!$conn){
    echo "connection Failed!";
}