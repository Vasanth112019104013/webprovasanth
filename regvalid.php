
<?php
include'regis.php';

                   $Name=$_POST['name'];
                   $email=$_POST['email'];
                   $password1=$_POST['password1'];
                   $password2=$_POST['password2'];
                   $age=$_POST['age'];
                   $dob=$_POST['dob'];
                   $num=$_POST['number1'];
                   $anum=$_POST['number2'];
                   //validation
                   if(empty($Name)){
                          $error="Please Enter Your Name ";
                          
                   }