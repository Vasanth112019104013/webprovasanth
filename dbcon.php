<html>
<?php

                   $Name=$_POST['name'];
                   $email=$_POST['email'];
                   $password1=$_POST['password1'];
                   $password2=$_POST['password2'];
                   $age=$_POST['age'];
                   $dob=$_POST['dob'];
                   $num=$_POST['number1'];
                   $anum=$_POST['number2'];
                                                             
            
                   //dbconnection
                   $conn= new mysqli('localhost','root','','registration');
                   if($conn->connect_error)
                   {
                    die('Connection Failed  :'.$conn->connect_error);
                   }
                   else{
                    $stmt=$conn->prepare("insert into regisereddata (name,email,password,age,dob,number,alnumber ) values (?,?,?,?,?,?,?)");
                    $stmt->bind_param("sssisii",$Name,$email,$password1,$age,$dob,$num,$anum);
                    $stmt->execute();
                    echo"eghhsxe";
                    header("Location: login.php");
                    $stmt->close();
                    $conn->close();
                   }                   
        ?>
</html>
